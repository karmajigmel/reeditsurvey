<x-guest-layout>
  <div class="w-screen h-screen bg-gradient-to-b from-purple-100 to-purple-300">
    <div class="h-48 w-screen bg-repeat bg-contain" style="background-image: url('img/top_art.png');"></div>
    <div class="w-screen mx-auto mt-16 sm:mt-24 flex flex-row justify-center items-center">
      <div class="grid grid-cols-1 gap-4 bg-purple-400 rounded-lg shadow-sm p-12">
        <h1 class="text-4xl font-bold mb-8 text-center">
            Student
        </h1>
        <h1 class="text-2xl font-bold text-center">
            Please select your gender
        </h1>
        <form method="GET" action="{{ route('student_create') }}" enctype="multipart/form-data">
          @csrf
            <div>
              <select id="gender" name="gender" class="mt-2 p-2 block w-full pl-3 pr-10 py-2 text-xl border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" required>
                <option value="" selected>Select</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                <option value="O">Other</option>
              </select>
            </div>

            <div class="pt-6 sm:pt-12">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 w-full">
                  Proceed to the questionnaire
                </button>

                <a href="/">
                  <button type="button" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500 w-full">
                    Cancel
                  </button>
                </a>

              </div>
            </div>
        </form>
      </div>
    </div>
    <div class="h-24 w-screen"></div>
  </div>
</x-guest-layout>
