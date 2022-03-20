<x-guest-layout>
<div class="w-screen bg-gradient-to-b from-fuchsia-100 to-fuchsia-300">
    <div class="h-48 w-screen bg-repeat bg-contain" style="background-image: url('img/top_art.png');"></div>
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 lg:mt-12">
        <div class="mt-6 p-12 bg-fuchsia-200 text-gray-600 dark:text-gray-400 text-base rounded-lg shadow-sm">
            <h1 class="text-4xl font-bold mb-8 text-gray-700 text-center">
                Teacher - SEN / Special Institute
            </h1>
            <h2 class="text-2xl font-bold mb-2 text-gray-600">
                Data protection rights and confidentiality
            </h2>
            <p class="mt-2">
              All information collected during those activities will be treated anonymously and will remain confidential: this means that we will write down what you tell us, but we will not say or write who said what. The results obtained at the end of the activities will be summarized in a report presenting your experiences, which will be shared with other organisations like Save the Children, GPE, GNHC, UNICEF and MOE in which the identity of the participants will not be revealed. No information that will allow to identify you or your family will be collected, for instance we will not be collecting the names and we will not include any information in the final report that would identify which people provided which information. We will not tell anyone what you have said unless we think you are in danger or have been hurt.
            </p>
            <h2 class="text-xl font-bold mb-2 mt-6 text-gray-600">
                Participation Rights
            </h2>
            <p class="mt-2">
              Participation in this study is completely voluntary: you can say no when we ask if you would like to speak to us. Be aware that even if you decide to participate in the activities, it is possible to stop at any time. Also be aware that participating or not participating in this study will have no impact on your participation in the project or any other activity led by Save the Children MoE or any other organisation
            </p>
            <h2 class="text-xl font-bold mb-2 mt-6 text-gray-600">
                Consent
            </h2>
            <p class="mt-2">
              I give my full consent to participate in the study and I understand participation, data protection rights and confidentiality of information.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-12 text-center">

                <form method="GET" action="{{ route('teachersen_create') }}" enctype="multipart/form-data">
                  @csrf
                  <button type="submit" class="w-full ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Yes, I agree.
                  </button>
                </form>

                <a href="/">
                 <button type="button" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-lg font-medium rounded-md text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500 w-full">
                      No thank you, I would prefer not to be involved.
                  </button>
                </a>

            </div>
        </div>
    </div>
    <div class="h-24 w-screen"></div>
  </div>
</x-guest-layout>
