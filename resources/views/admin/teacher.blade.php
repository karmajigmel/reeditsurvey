<x-app-layout>
    <x-slot name="header">
      <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teacher Data - Regular School') }}
        </h2>
        <span>
          <a href="{{ route('tgExport') }}">
            <button type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
              Download Teachers' Data
            </button>
          </a>
        </span>
      </div>
    </x-slot>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6">
          <table id="myTable" class="display compact" style="width:100%">
            <thead>
              <tr>
                <th>Dzongkhag / Thromde</th>
                <th>School</th>
                <th>Email</th>
                <th>Level (Class range)</th>
                <th>Added on</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($teacher_responses as $response)
              <tr>
                <td>{{ $response->dzongkhag_thromde }}</td>
                <td>{{ $response->TG4 }}</td>
                <td>{{ $response->TG2 }}</td>
                <td>{{ $response->TG5 }}</td>
                <td>{{ \Carbon\Carbon::parse( $response->created_at )->toFormattedDateString() }}</td>
                <td>
                  <a href="{{ route('cData_show', $response->id ) }}">
                    <button type="submit" class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs font-medium rounded-full shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      Show
                    </button>
                  </a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
    </div>
</x-app-layout>

<script type="text/javascript">
  $(document).ready( function () {
      $('#myTable').DataTable();
  } );
</script>


