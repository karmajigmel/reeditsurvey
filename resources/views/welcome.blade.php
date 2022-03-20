<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ReEdIT Survey</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="antialiased">

        <div class="bg-gradient-to-r from-orange-200 via-yellow-100 to-orange-200">
            <div class="h-48 w-screen bg-repeat bg-contain" style="background-image: url('img/top_art.png');"></div>
            <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 bg-gray-200 rounded-lg px-4 py-2 opacity-50 hover:bg-gray-300 hover:opacity-100 hover:text-gray-700">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 bg-gray-200 rounded-lg px-4 py-2 opacity-50 hover:bg-gray-300 hover:opacity-100 hover:text-gray-700">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 bg-gray-200 rounded-lg px-4 py-2 opacity-50 hover:bg-gray-300 hover:opacity-100 hover:text-gray-700">Register</a>
                        @endif
                    @endauth
                </div>
                @endif

                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class="mt-12 pt-8 sm:justify-start sm:pt-0">
                        <img class="mx-auto" src="{{ asset('img/rgob_logo_square.png')}}" width="250px">
                    </div>
                    <div class="flex justify-center mt-8 pt-8 sm:justify-start sm:pt-0 p-2">
                        <h1 class="text-3xl font-bold text-center">Global Partnership for Education’s COVID-19 accelerated fund to support Bhutan’s Education Sector</h1>
                    </div>
                    <div class="mt-4 pt-4">
                        <h2 class="text-3xl text-center text-blue-600 font-black">End of Project Evaluation</h2>
                    </div>
                    <div class="mt-6 p-12 bg-yellow-100 text-gray-700 dark:text-gray-400 text-base rounded-lg shadow-sm">
                        <h2 class="text-xl font-bold mb-2">
                            Introduction
                        </h2>
                        <p class="mt-4">
                            Since March 2020, all schools and educational institutes in the country were closed, which affected close to 167,000 school going children from PP-XII grades. To mitigate the learning loss due to prolonged closure of schools, MoE responded with immediate interventions, such as Education in Emergency Guidelines, Adapted and Prioritize Curriculum, delivery of lessons on television and radio, online learning through internet, and as well as development and distribution of Self-Instructional Materials (SIM). The ministry also provided WASH facilities like SATO pans, water filters to schools and sanitary pads to girls for healthy living and hygiene. The counselling services were also placed by the ministry for psychosocial support for children during the pandemic. These interventions were supported through a 15 months long project “Supporting children’s learning and well-being during COVID-19” funded by the Global Partnership (GPE) Accelerated Funding Request amounting to USD 750,000. The project is complete and it is imperative to assess the overall project progress and results against the objectives and indicators of achievement. This study is commissioned by Save the Children in collaboration with MoE, GNHC and UNICEF.</p>
                        <p class="mt-4">
                            In order to have a comprehensive evaluation, we would like to discuss and collect the points of view of all the key stakeholders involved in the project or benefitted from it, such as focal person of implementing partners, programmes officers, principals, counsellors, teachers, children the parents, school staff, local authorities, etc.</p>
                        <p class="mt-4">
                            The objective of this evaluation is to understand the relevancy, coherence, efficacy, efficiency and sustainability of the interventions and activities mainly to capture lessons learned and take account of the use of donor funds and share corresponding results achieved to donors and project stakeholders.</p>
                        <p class="mt-4">
                            In order to have a comprehensive evaluation, we would like to discuss and gather authentic responses and understand your perspective of programmes, their benefits and challenges form all the main stakeholders involved in the programme, such as focal person of implementing partners, Programmes officers, youths, children the parents, school staff, local authorities, etc.</p>
                        <p class="mt-4">
                            The activity will last around an hour. Please note that you will not receive any incentives in return for participating in the discussion.</p>
                    </div>
                    <div class="mt-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-2">
                            <a href="{{ route('principal_index') }}" class="text-gray-900 dark:text-white">
                                <div class="m-2 p-6 sm:m-0 sm:p-4 bg-green-400 dark:bg-gray-800 hover:bg-green-700 hover:text-white overflow-hidden rounded-xl shadow sm:rounded-lg lg:h-24">
                                    <div class="grid grid-cols-5">
                                        <div class="w-12">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                            </svg>
                                        </div>
                                        <div class="col-span-4 ml-4 text-2xl sm:text-xl font-bold leading-7 font-semibold dark:text-white text-left">
                                            Principal
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="/teachercategory" class="text-gray-900 dark:text-white">
                                <div class="m-2 p-6 sm:m-0 sm:p-4 bg-sky-400 dark:bg-gray-800 hover:bg-sky-700 hover:text-white overflow-hidden shadow rounded-xl sm:rounded-lg lg:h-24">
                                    <div class="grid grid-cols-5">
                                        <div class="w-12">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                            </svg>
                                        </div>
                                        <div class="col-span-4 ml-4 text-2xl sm:text-xl font-bold leading-7 font-semibold dark:text-white text-left">
                                            Teacher
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ route('counsellor_index') }}" class="text-gray-900 dark:text-white">
                                <div class="m-2 p-6 sm:m-0 sm:p-4 bg-amber-400 dark:bg-gray-800 hover:bg-amber-700 hover:text-white overflow-hidden shadow rounded-xl sm:rounded-lg lg:h-24">
                                    <div class="grid grid-cols-5">
                                        <div class="w-12">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                            </svg>
                                        </div>
                                        <div class="col-span-4 ml-4 text-2xl sm:text-xl font-bold leading-7 font-semibold dark:text-white text-left">
                                            Counsellors / Focal Teacher
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ route('student_index') }}" class="text-gray-900 dark:text-white">
                                <div class="m-2 p-6 sm:m-0 sm:p-4 bg-purple-400 dark:bg-gray-800 hover:bg-purple-700 hover:text-white overflow-hidden shadow rounded-xl sm:rounded-lg lg:h-24">
                                    <div class="grid grid-cols-5">
                                        <div class="w-12">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                            </svg>
                                        </div>
                                        <div class="col-span-4 ml-4 text-2xl sm:text-xl font-bold leading-7 font-semibold dark:text-white text-left">
                                            Student
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="mt-6 grid justify-items-stretch grid-rows-2 lg:grid-rows-1 grid-flow-col">
                        <div class="justify-self-center">
                            <img class="h-20 md:h-28 items-center" src="{{ asset('img/moe_logo.png')}}">
                        </div>
                        <div class="justify-self-center">
                            <img class="h-20 md:h-28" src="{{ asset('img/unicef_logo.png')}}">
                        </div>
                        <div class="justify-self-center">
                            <img class="h-20 md:h-28" src="{{ asset('img/gpe_logo.png')}}">
                        </div>
                        <div class="justify-self-center">
                            <img class="h-20 md:h-28" src="{{ asset('img/save_the_children_logo.png')}}">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a href="/generalthankyou">
            <div class="fixed top-48 right-0 px-8 py-4 rounded-lg shadow-sm mt-4 mr-4 text-gray-700 bg-pink-200 text-center hover:bg-pink-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 opacity-50 hover:opacity-100">
                EXIT
            </div>
        </a>
        @include('partials.footer')
    </body>
</html>
