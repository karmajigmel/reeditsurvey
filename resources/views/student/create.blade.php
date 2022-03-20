<x-guest-layout>
    <div class="w-screen bg-gradient-to-r from-purple-300 via-purple-200 to-purple-300">
        <div class="h-24 w-screen bg-repeat bg-contain" style="background-image: url('img/top_art.png');"></div>
        <div class="max-w-5xl mx-auto">

            <div class="mt-6 p-12 sm:p-6 text-center">
                <h1 class="text-4xl font-black">
                    Student Questionnaire
                </h1>
            </div>

            @if ($errors->any())
                <div class="bg-purple-200 p-6 rounded-lg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('student_store') }}" enctype="multipart/form-data">
                @csrf

                @foreach($survey_questions as $question => $value)
                    @if($value->response_type == 'Heading')
                        <div class="p-6 mt-6 bg-orange-400 md:rounded-lg md:shadow-sm">
                            <span class="text-xl font-bold">
                                {{ $value->question_no }} {{ $value->item_details }}
                            </span>
                        </div>
                    @elseif($value->response_type == 'Question')
                        <div class="px-6 py-2 mt-6 bg-purple-600 md:rounded-lg md:shadow-sm" data-id="{{ $value->respondent_sub_category == 'Female' ? $value->respondent_sub_category_option : '' }}" style="{{ $value->respondent_sub_category_option == 'O2' ? 'display: none;' : '' }}">
                            <span class="text-lg font-bold text-white">
                                {{ $value->question_no }} {{ $value->item_details }}
                            </span>
                        </div>
                    @elseif($value->item_no == 'S1')
                        <div class="p-6 mt-6 bg-purple-200 md:rounded-lg md:shadow-sm flex flex-row items-center">
                            <div class="mr-6">
                                <label for="{{ $value->item_no }}" class="block text-lg font-medium text-gray-700">{{ $value->question_no }} {{ $value->item_details }}</label>
                            </div>
                            <div>
                                <input type="text" name="{{ $value->item_no }}" id="{{ $value->item_no }}" class="mt-2 p-2 shadow-sm focus:ring-purple-500 focus:border-purple-500 block w-full border-purple-400 rounded-md bg-purple-50" value="{{ 'Yes, I agree' }}" readonly>
                            </div>
                        </div>
                    <!-- For Dzongkhag/Thromde dropdown -->
                    @elseif($value->item_no == 'S2')
                        <div class="p-6 mt-6 bg-purple-200 md:rounded-lg md:shadow-sm flex flex-col sm:flex-row sm:items-center">
                            <div class="mr-6">
                                <label for="S2" class="block text-lg font-medium text-gray-700">{{ $value->item_details }}</label>
                            </div>
                            <select id="S2" name="S2" class="mt-2 block pl-3 pr-10 py-2 text-lg sm:text-sm rounded-md border border-purple-400 bg-purple-50" {{ $value->mandatory }}>
                                <option value="" selected>Select</option>
                                @foreach($districts as $district)
                                  <option value="{{ $district->district_id }}">{{ $district->dzongkhag_thromde }}</option>
                                @endforeach
                            </select>
                        </div>
                    <!-- For School dropdown -->
                    @elseif($value->item_no == 'S3')
                        <div class="p-6 mt-6 bg-purple-200 md:rounded-lg md:shadow-sm flex flex-row items-center">
                            <div class="mr-6">
                                <label for="S3" class="block text-lg font-medium text-gray-700">{{ $value->item_details }}</label>
                            </div>
                            <select id="S3" name="S3" class="mt-2 block pl-3 pr-10 py-2 text-lg sm:text-sm rounded-md border border-purple-400 bg-purple-50" {{ $value->mandatory }}>
                                <option value=""></option>
                            </select>
                        </div>
                    @elseif($value->item_no == 'S5')
                        <div class="p-6 mt-6 bg-purple-200 md:rounded-lg md:shadow-sm flex flex-row items-center">
                            <div class="mr-6">
                                <label for="{{ $value->item_no }}" class="block text-lg font-medium text-gray-700">{{ $value->question_no }} {{ $value->item_details }}</label>
                            </div>
                            <div>
                                <input type="text" name="{{ $value->item_no }}" id="{{ $value->item_no }}" class="mt-2 p-2 shadow-sm focus:ring-purple-500 focus:border-purple-500 block w-full border-purple-400 rounded-md bg-purple-50" value="{{ $gender === 'F' ? 'Female' : ( $gender === 'O' ? 'Other' : 'Male') }}" readonly>
                            </div>
                        </div>
                    @else
                        <div class="p-6 mt-4 bg-purple-200 md:rounded-lg md:shadow-sm" data-id="{{ $value->respondent_sub_category == 'Female' ? $value->respondent_sub_category_option : '' }}" style="{{ $value->respondent_sub_category_option == 'O2' ? 'display: none;' : '' }}">
                            <label for="{{ $value->item_no }}" class="block text-lg font-medium text-gray-700">
                                {{ $value->question_no }} {{ $value->item_details }}
                            </label>
                            @if( $value->response_type == 'Radio' )
                                <div class="pt-2 grid grid-cols-1 gap-2 md:grid-cols-5">
                                    @php $response_array = explode(",",$value->response); @endphp
                                    @if (is_array($response_array) && count($response_array) > 0)
                                        @foreach($response_array as $response_value)
                                            <label class="border rounded-md py-2 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer bg-purple-50 border-purple-400 text-gray-900 hover:bg-purple-500 hover:text-white hover:font-bold">
                                            <input type="radio" name="{{ $value->item_no }}" value="{{ $response_value }}" {{ $value->mandatory }}>
                                                  <p class="ml-4" id="{{ $loop->iteration }}">
                                                    {{ $response_value }}
                                                  </p>
                                            </label>
                                        @endforeach
                                    @endif
                                </div>
                            @elseif( $value->response_type == 'Select' )
                                <select id="{{ $value->item_no }}" name="{{ $value->item_no }}" class="mt-2 block pl-3 pr-10 py-2 text-lg sm:text-sm rounded-md border border-purple-400 bg-purple-50" {{ $value->mandatory }} onchange=showMe({{ $value->respondent_sub_category_option === 'O1' ? 'this' : '' }}) {{ $value->respondent_sub_category_option === 'O1' ? 'required' : '' }}>
                                  <option value="" selected>Select</option>
                                       @if ($value->response != "")
                                            @foreach(explode(',', $value->response) as $value)
                                              <option value="{{$value}}">{{ $value }}</option>
                                            @endforeach
                                      @endif
                                </select>
                            @else
                                <textarea id="{{ $value->item_no }}" name="{{ $value->item_no }}" rows="2" class="border border-purple-400 bg-purple-50 mt-2 p-2 w-full shadow-sm block w-full focus:ring-purple-500 focus:border-purple-500 sm:text-sm border border-gray-300 rounded-md" {{ $value->mandatory }} autofocus></textarea>
                            @endif
                        </div>
                        @endif
                @endforeach
                <div class="p-6 mt-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center">

                        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Click here to submit your responses
                        </button>

                        <a href="/">
                            <button type="button" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500 w-full">
                                Cancel
                            </button>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>

<script type="text/javascript">
  $('input[type=radio]').click(function(){
      if (this.previous) {
          this.checked = false;
      }
      this.previous = this.checked;
  });
</script>

<script>
  function showMe(selectedOption) {
      if(selectedOption.value=="Yes") {
        $("[data-id='O2']").show();
      } else {
        $("[data-id='O2']").hide();
      }
  }
</script>

<script>
    // Get School List
    $(document).ready(function(){
        $('#S2').change(function(){
            var dzongkhag = $('#S2').val();
            console.log(dzongkhag);
            $('#S3').html('');
            $.ajax({
                url:'getSchool/' + dzongkhag,
                type:'GET',
                data:{dzongkhagID:dzongkhag},
                dataType: "json",
                success:function(data)
                {
                    $.each(data, function(key, S3)
                    {
                        $('#S3').prop('disabled', false).append('<option value="'+S3.school_name+'">'+S3.school_name+'</option>');
                    });
                }
            });
        });
    });
</script>

