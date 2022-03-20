<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Counsellor Data - Show') }}
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
                                    @foreach($counsellordata as $value)

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C1
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Consent
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C1 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C2
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Email address (This information will be used only to triangulate and filter double and triple entries)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C2 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C3
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
                                        C4
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        School
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C4 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C5
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Level (Class range)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C5 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C6
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Gender
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C6 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C7
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        I received training on Counselling Skills and Techniques
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C7 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C8
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Psychosocial support
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C8 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C9
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Others
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C9 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C10
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Female
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C10 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C11
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Male
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C11 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C12
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Other (Please enter NA if none)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C12 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C13
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        What is the common type psychosocial support and counselling services availed by students?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C13 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C14
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        The training was sufficient to carter to  vulnerable  student (all gender, children with disabilities, poor children, children in difficult circumstances, etc.) in the time of emergencies
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C14 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C15
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        As a result of training, I could effectively raise awareness among students on where and from whom the psychosocial support and counselling services could be availed.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C15 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C16
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        The internet data package provided through the project enabled and facilitated the services.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C16 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C17
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        I could effectively handle the cases and provide effective services even to children with disabilities.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C17 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C18
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        I still continue to provide the services even after reopening of schools
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C18 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C19
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Students claimed that counselling services help them to cope better with the situations.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C19 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C20
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        The Department of Youth and Sports, MoE supported me whenever I had technical difficulty in providing the services.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C20 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C21
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Well-being of the students in general have  increased after providing psychosocial support and counselling services
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C21 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C22
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Psychosocial support and counselling services have helped students to avoid distractions and focus on learning, well-being and hygiene.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C22 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C23
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        The number of students reprimanded for disciplinary problems have declined compared to previous years.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C23 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C24
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Psychosocial support and counselling services have prevented number of students  from dropping out of school.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C24 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C25
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        What type of support did you receive from with local, private institutions or individual in providing psychosocial support and counselling services?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C25 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C26
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Describe some of the challenges you faced in providing psychosocial support and counselling services to children and the ways you adopted to overcome them?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C26 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C27
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        What plans do you and your school have to scale up or ensure the continuity of psychosocial support and Counselling services to children the following support to children in your school?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C27 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        C28
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Are you aware of any cases of sexual exploitation, abuse, and harassment (SEAH) during the course of education in emergency?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->C28 }}
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
