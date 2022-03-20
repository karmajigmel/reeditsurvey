<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teacher Data - Show') }}
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
                                    @foreach($teacherdata as $value)

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG1
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Consent
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG1 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG2
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Email address (This information will be used only to triangulate and filter double and triple entries)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG2 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG3
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
                                        TG4
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        School
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG4 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG5
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Level (Class range)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG5 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG6
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Gender
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG6 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG7
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        How were you involved in the development and implementation of Adapted Curriculum/Prioritised Curriculum, New Normal Curriculum, lessons or learning materials (SIM, Video, Audio)?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG7 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG8
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        New Normal Curriculum / Adapted / Prioritised Curriculum
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG8 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG9
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Subject-based instructional guides
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG9 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG10
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Video lessons
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG10 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG11
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        SIMs Lessons
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG11 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG12
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       SATO Pans
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG12 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG13
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Water filters
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG13 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG14
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Sanitary pads for girls
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG14 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG15
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Training of teachers in New Normal Curriculum / Adapted / Prioritised Curriculum
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG15 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG16
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Training of counsellors
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG16 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG17
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Curriculum, SIM and online learning materials were easily accessible to teachers and students during the school closure
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG17 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG18
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Subject based guidelines, customized SIM lessons and learning materials were useful in ensuring continuity of learning.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG18 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG19
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Subject based guidelines,  customized SIM lessons and learning materials are still used after the school reopened
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG19 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG20
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        The  orientation/ training  I received on NNC and its implementation, including the use of technology  was very useful is teaching and learning.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG20 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG21
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       WASH and hygiene facilities (SATO pans, water filters and sanitary pads) have benefited schools and children.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG21 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG22
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Students are aware of counselling services (including online services) provided in the school
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG22 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG23
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Students were sensitized on safe use of computers / mobiles, internet and social media.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG23 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG24
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Has your school strengthened as a result of the intervention through the GPE project in terms of response (to COVID and beyond, to address major disruptive events) and / or recovery (to prepare for the reopening of schools, etc.)?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG24 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG25
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        What type of support (in cash or in kind) did school receive from private or individual donors during the pandemic?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG25 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG26
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Describe some of the challenges you faced in implementing curriculum, subject based guidelines, SIM lessons and other learning materials.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG26 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG27
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Curriculum and teaching learning material adaptions
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG27 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG28
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Access to learning materials and devices
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG28 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TG29
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Are you aware of any cases of sexual exploitation, abuse, and harassment (SEAH) during the course of education in emergency?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TG29 }}
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
