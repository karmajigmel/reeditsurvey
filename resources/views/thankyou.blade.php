<x-guest-layout>
  @include('components.notification')
  <div class="w-screen h-screen bg-green-700">
      <div class="h-48 w-screen bg-repeat bg-contain" style="background-image: url('img/top_art.png');"></div>
      <div class="pt-48 max-w-3xl mx-auto">
        <h2 class="text-4xl font-black mb-4 text-white text-center m-4">
            Thank you for your time, honest response and valuable suggestions.
        </h2>
      </div>
      <div class="mx-auto flex flex-row justify-center items-center pt-40">
        <a href="/">
          <button type="button" class="inline-flex justify-center p-6 border border-transparent shadow-sm text-2xl font-medium rounded-md bg-yellow-200 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-300 w-full">
            Back to homepage
          </button>
        </a>
      </div>
  </div>
</x-guest-layout>
