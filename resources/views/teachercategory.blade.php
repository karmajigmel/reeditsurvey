<x-guest-layout>
    <div class="h-screen bg-gradient-to-b from-green-100 to-green-200">
        <div class="h-48 w-screen bg-repeat bg-contain" style="background-image: url('img/top_art.png');"></div>
        <div class="mt-12 mx-auto w-full flex flex-row justify-center items-center">
            <div class="sm:mt-12 p-2 sm:p-12 text-gray-600 dark:text-gray-400 text-base text-center">
                <h2 class="text-2xl font-bold mb-4 text-gray-600">
                    Select the type of school you work in.
                </h2>
                <div class="flex flex-col sm:flex-row">
                  <div class="p-6">
                    <form method="GET" action="{{ route('teacher_index') }}" enctype="multipart/form-data">
                      @csrf
                      <button type="submit" class="w-full inline-flex justify-center px-12 py-6 border border-transparent shadow-sm text-2xl font-medium rounded-md text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 w-full">
                        Regular School
                      </button>
                    </form>
                  </div>
                  <div class="p-6">
                    <form method="GET" action="{{ route('teachersen_index') }}" enctype="multipart/form-data">
                      @csrf
                      <button type="submit" class="w-full inline-flex justify-center px-12 py-6 border border-transparent shadow-sm text-2xl font-medium rounded-md text-white bg-fuchsia-600 hover:bg-fuchsia-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-fuchsia-500">
                        SEN / Special Institute
                      </button>
                    </form>
                  </div>
                  <div class="p-6">
                    <a href="/">
                      <button type="button" class="w-full inline-flex justify-center px-12 py-6 border border-transparent shadow-sm text-2xl font-medium rounded-md text-white bg-pink-600 hover:bg-pink-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 w-full">
                        Cancel
                      </button>
                    </a>
                  </div>
                </div>
            </div>
        </div>
        <div class="h-24 w-screen"></div>
    </div>
</x-guest-layout>
