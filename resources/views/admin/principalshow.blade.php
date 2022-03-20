<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Principal Data - Show') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-orange-200 via-yellow-100 to-orange-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">

                        <div class="flex flex-col">
                          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                  <thead class="bg-rose-700 text-white">
                                    <tr>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                                        Sl#
                                      </th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                                        Question
                                      </th>
                                      <th scope="col" class="px-6 py-3 text-left text-xs font-bold uppercase tracking-wider">
                                        Response
                                      </th>
                                  </thead>
                                  <tbody>
                                    @foreach($principaldata as $value)

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P1
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Consent
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P1 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P2
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Email address (This information will be used only to triangulate and filter double and triple entries)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P2 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P3
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Dzongkhag / Thromde
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->dzongkhag_thromde }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P4
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        School
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P4 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P5
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Level (Class range)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P5 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P6
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Gender
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P6 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P7
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        How many computers / laptops with internet connection were supported by the Global Partnership for Education(GPE) project that are accessible to students in your school?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P7 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P8
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        How many counsellors / focal teachers of your school were trained through the project?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P8 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P9
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        How many teachers are there in your school?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P9 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P10
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        How many teachers of your school were involved in the development of Adapted Curriculum(AC) / Prioritised Curriculum (PC), New Normal Curriculum (NNC), lessons or learning materials (SIM, Video, Audio)?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P10 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P11
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        How many teachers in your school received the orientation / training on NNC and its implementation, including the use of technology?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P11 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P12
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        How many times have you participated in video-conference sessions / meeting with the officers of REC / MoE to receive directions and support?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P12 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P13
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Adapted / Prioritised Curriculum
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P13 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P14
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        New Normal Curriculum
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P14 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P15
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Video lessons
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P15 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P16
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Internet access
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P16 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P17
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        SIM booklets
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P17 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P18
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        SIM lessons
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P18 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P19
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Counselling services
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P19 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P20
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Adapted / Prioritised Curriculum
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P20 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P21
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        New Normal Curriculum
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P21 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P22
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Subject-based instructional guides
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P22 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P23
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Video lessons
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P23 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P24
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Printed SIMs Lessons
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P24 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P25
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        SATO Pans
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P25 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P26
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Water filters
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P26 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P27
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Sanitary pads for girls
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P27 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P28
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Assistive devices (tablets / mobile phone, etc.)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P28 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P29
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Training of teachers in NNC, AC / PC
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P29 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P30
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Training of counsellors
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P30 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P31
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Adapted / Prioritised Curriculum
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P31 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P32
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        New Normal Curriculum
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P32 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P33
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Subject-based instructional guides
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P33 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P34
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Video lessons
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P34 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P35
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        SIMs Lessons
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P35 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P36
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        SATO Pans
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P36 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P37
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Water filters
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P37 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P38
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Sanitary pads for girls
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P38 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P39
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Assistive devices (tablets / mobile phone, etc.)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P39 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P40
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Training of teachers in NNC, AC / PC
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P40 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P41
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Training of counsellors
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P41 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P42
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                      Curriculum, SIM and online learning materials were easily accessible to teachers and students during the school closure
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P42 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P43
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                      Curriculum, SIM, learning materials and assistive devices are useful in ensuring continuity of learning.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P43 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P44
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                     Curriculum, SIM and online learning materials are still used after the school reopened
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P44 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P45
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                      WASH and hygiene facilities (SATO pans, water filters and sanitary pads) were of good quality
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P45 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P46
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        WASH and hygiene facilities (SATO pans, water filters) were and are fully utilised
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P46 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P47
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                      Students are aware of counselling services (including online services) provided
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P47 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P48
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Students were sensitized on safe use of computers / mobiles, internet and social media
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P48 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P49
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                      All the support (technical and material) were provided right on time
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P49 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P50
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Is your school strengthened as a result of the intervention through the GPE project in terms of response (to COVID and beyond, to address major disruptive events) and / or recovery (to prepare for the reopening of schools, etc.)?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P50 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P51
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                      What type of support did your school receive (in cash or in kind) from private or individual donors?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P51 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P52
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Describe the challenges faced in terms of teaching and learning during the school closure and after school has reopened?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P52 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P53
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                      Hygiene and sanitation through maintained toilets with SATO pans
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P53 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P54
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Health and Hygiene practices by continued support of sanitary pads for girl children
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P54 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P55
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                      Safe drinking water supply in school
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P55 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P56
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                      Access to learning materials
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P56 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P57
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                     Counselling services to children
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P57 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        P58
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                      Are you aware of any cases of sexual exploitation, abuse, and harassment (SEAH) during the course of education in emergency?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->P58 }}
                                      </td>
                                    </tr>

                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
