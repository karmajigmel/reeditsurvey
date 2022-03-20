<x-guest-layout>
    <div class="w-screen bg-gradient-to-r from-fuchsia-200 via-fuchsia-100 to-fuchsia-200">
        <div class="h-24 w-screen bg-repeat bg-contain" style="background-image: url('img/top_art.png');"></div>
        <div class="max-w-5xl mx-auto">

            <div class="mt-6 p-12 sm:p-6 text-center">
                <h1 class="text-4xl font-black">
                    Teacher Questionnaire - SEN / Special Institute
                </h1>
            </div>

            @if ($errors->any())
                <div class="bg-pink-200 p-6 rounded-lg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('teachersen_store') }}" enctype="multipart/form-data">
                @csrf

                @foreach($survey_questions as $question => $value)
                    @if($value->response_type == 'Heading')
                        <div class="p-6 mt-6 bg-orange-400 md:rounded-lg md:shadow-sm">
                            <span class="text-xl font-bold">
                                {{ $value->question_no }} {{ $value->item_details }}
                            </span>
                        </div>
                    @elseif($value->response_type == 'Question')
                        <div class="px-6 py-2 mt-6 bg-fuchsia-600 md:rounded-lg md:shadow-sm">
                            <span class="text-lg font-bold text-white">
                                {{ $value->question_no }} {{ $value->item_details }}
                            </span>
                        </div>
                    @elseif($value->item_no == 'TS1')
                        <div class="p-6 mt-6 bg-fuchsia-200 md:rounded-lg md:shadow-sm flex flex-row items-center">
                            <div class="mr-6">
                                <label for="{{ $value->item_no }}" class="block text-lg font-medium text-gray-700">{{ $value->question_no }} {{ $value->item_details }}</label>
                            </div>
                            <div>
                                <input type="text" name="{{ $value->item_no }}" id="{{ $value->item_no }}" class="mt-2 p-2 shadow-sm focus:ring-fuchsia-500 focus:border-fuchsia-500 block w-full border-fuchsia-400 rounded-md bg-fuchsia-50" value="{{ 'Yes, I agree' }}" readonly>
                            </div>
                        </div>
                    @elseif($value->item_no == 'TS2')
                        <div class="p-6 mt-6 bg-fuchsia-200 md:rounded-lg md:shadow-sm flex flex-col">
                            <div class="mr-6">
                                <label for="{{ $value->item_no }}" class="block text-lg font-medium text-gray-700">{{ $value->question_no }} {{ $value->item_details }}</label>
                            </div>
                            <div>
                                <input type="email" name="{{ $value->item_no }}" id="{{ $value->item_no }}" class="mt-2 p-2 shadow-sm focus:ring-fuchsia-500 focus:border-fuchsia-500 block w-full border-fuchsia-400 rounded-md bg-fuchsia-50" {{ $value->mandatory }} autofocus>
                            </div>
                        </div>
                    <!-- For Dzongkhag/Thromde dropdown -->
                    @elseif($value->item_no == 'TS3')
                        <div class="p-6 mt-6 bg-fuchsia-200 md:rounded-lg md:shadow-sm flex flex-col sm:flex-row sm:items-center">
                            <div class="mr-6">
                                <label for="TS3" class="block text-lg font-medium text-gray-700">{{ $value->item_details }}</label>
                            </div>
                            <select id="TS3" name="TS3" class="mt-2 block pl-3 pr-10 py-2 text-lg sm:text-sm rounded-md border border-fuchsia-400 bg-fuchsia-50" {{ $value->mandatory }}>
                                <option value="" selected>Select</option>
                                @foreach($districts as $district)
                                  <option value="{{ $district->district_id }}">{{ $district->dzongkhag_thromde }}</option>
                                @endforeach
                            </select>
                        </div>
                    <!-- For School dropdown -->
                    @elseif($value->item_no == 'TS4')
                        <div class="p-6 mt-6 bg-fuchsia-200 md:rounded-lg md:shadow-sm flex flex-row items-center">
                            <div class="mr-6">
                                <label for="TS4" class="block text-lg font-medium text-gray-700">{{ $value->item_details }}</label>
                            </div>
                            <select id="TS4" name="TS4" class="mt-2 block pl-3 pr-10 py-2 text-lg sm:text-sm rounded-md border border-fuchsia-400 bg-fuchsia-50" {{ $value->mandatory }}>
                                <option value=""></option>
                            </select>
                        </div>
                    @else
                        <div class="p-6 mt-4 bg-fuchsia-200 md:rounded-lg md:shadow-sm">
                            <label for="{{ $value->item_no }}" class="block text-lg font-medium text-gray-700">
                                {{ $value->question_no }} {{ $value->item_details }}
                            </label>
                            @if( $value->response_type == 'Radio' )
                                <div class="pt-2 grid grid-cols-1 gap-2 md:grid-cols-6">
                                    @php $response_array = explode(",",$value->response); @endphp
                                    @if (is_array($response_array) && count($response_array) > 0)
                                        @foreach($response_array as $response_value)
                                            <label class="border rounded-md py-2 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer bg-fuchsia-50 border-fuchsia-400 text-gray-900 hover:bg-fuchsia-500 hover:text-white hover:font-bold">
                                            <input type="radio" name="{{ $value->item_no }}" value="{{ $response_value }}" {{ $value->mandatory }}>
                                                  <p class="ml-4" id="{{ $loop->iteration }}">
                                                    {{ $response_value }}
                                                  </p>
                                            </label>
                                        @endforeach
                                    @endif
                                </div>
                            @elseif( $value->response_type == 'Select' )
                                <select id="{{ $value->item_no }}" name="{{ $value->item_no }}" class="mt-2 block pl-3 pr-10 py-2 text-lg sm:text-sm rounded-md border border-fuchsia-400 bg-fuchsia-50" {{ $value->mandatory }}>
                                  <option value="" selected>Select</option>
                                       @if ($value->response != "")
                                            @foreach(explode(',', $value->response) as $value)
                                              <option value="{{$value}}">{{ $value }}</option>
                                            @endforeach
                                      @endif
                                </select>
                            @else
                                <textarea id="{{ $value->item_no }}" name="{{ $value->item_no }}" rows="2" class="border border-fuchsia-400 bg-fuchsia-50 mt-2 p-2 w-full shadow-sm block w-full focus:ring-fuchsia-500 focus:border-fuchsia-500 sm:text-sm border border-gray-300 rounded-md" {{ $value->mandatory }} autofocus></textarea>
                            @endif
                        </div>
                        @endif
                @endforeach
                <div class="p-6 mt-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-center">

                        <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                        Click here to save the questionnaire
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

<script>
  $('input[type=radio]').click(function(){
      if (this.previous) {
          this.checked = false;
      }
      this.previous = this.checked;
  });
</script>

<script>
    // Get School List
    $(document).ready(function(){
        $('#TS3').change(function(){
            var dzongkhag = $('#TS3').val();
            console.log(dzongkhag);
            $('#TS4').html('');
            $.ajax({
                url:'getSchool/' + dzongkhag,
                type:'GET',
                data:{dzongkhagID:dzongkhag},
                dataType: "json",
                success:function(data)
                {
                    $.each(data, function(key, TS4)
                    {
                        $('#TS4').prop('disabled', false).append('<option value="'+TS4.school_name+'">'+TS4.school_name+'</option>');
                    });
                }
            });
        });
    });
</script>
