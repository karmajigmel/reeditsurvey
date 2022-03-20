<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('SEN / Special Institute Teacher Data - Show') }}
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
                                    @foreach($teachersendata as $value)

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS1
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Consent
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS1 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS2
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Email address (This information will be used only to triangulate and filter double and triple entries)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS2 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS3
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
                                        TS4
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        School
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS4 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS5
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Level (Class range)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS5 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS6
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Gender
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS6 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS7
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        How were you involved in the development and implementation of Adapted Curriculum / Prioritised Curriculum, New Normal Curriculum, lessons or learning materials (SIM, Video, Audio)?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS7 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS8
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        New Normal Curriculum / Adapted / Prioritised Curriculum
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS8 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS9
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Subject-based instructional guides
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS9 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS10
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Video lessons
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS10 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS11
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        SIMs Lessons
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS11 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS12
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       SATO Pans
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS12 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS13
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Water filters
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS13 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS14
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Sanitary pads for girls
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS14 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS15
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Assistive devices (tablets / mobile phone, etc.)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS15 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS16
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Internet Data Packages
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS16 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS17
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Training of teachers in NNC, AC / PC
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS17 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS18
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Training of counsellors
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS18 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS19
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                      Curriculum, SIM and online learning materials were easily accessible to teachers and students during the school closure
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS19 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS20
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Subject based guidelines, customized SIM lessons, learning materials and assistive devices are useful in ensuring continuity of learning.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS20 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS21
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Subject based guidelines,  customized SIM lessons, learning materials and assistive devices are still used after the school reopened
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS21 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS22
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       The  orientation / training  I received on NNC and its implementation, including the use of technology  was very useful is teaching and learning.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS22 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS23
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        WASH and hygiene facilities (SATO pans, water filters and sanitary pads) have benefited schools and children.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS23 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS24
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        All the assistive devices were provided right on time
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS24 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS25
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Students were sensitized on safe use of computers / mobiles, internet and social media
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS25 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS26
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Customized learning materials and assistive devices were very useful to enhance enthusiasm for learning among children
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS26 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS27
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Has your school strengthened as a result of the intervention through the GPE project in terms of response (to COVID and beyond, to address major disruptive events) and/or recovery (to prepare for the reopening of schools, etc.)?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS27 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS28
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        What type of support (in cash or in kind) did school receive from private or individual donors during the pandemic?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS28 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS29
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Describe some of the challenges you faced in customizing TLMs, using assistive devices, implementing curriculum, Subject based guidelines, SIM lessons and other learning materials.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS29 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS30
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Curriculum and teaching learning material adaptions
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS30 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS31
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Access to learning materials and devices
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS31 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        TS32
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Are you aware of any cases of sexual exploitation, abuse, and harassment (SEAH) during the course of education in emergency?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->TS32 }}
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
