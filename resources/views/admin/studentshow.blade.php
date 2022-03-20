<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student Data - Show') }}
        </h2>
    </x-slot>

    <div class="py-12">
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
                                    @foreach($studentdata as $value)

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S1
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Consent
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S1 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S2
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Dzongkhag / Thromde
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S2 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S3
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        School
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->dzongkhag_thromde }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S4
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Class
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S4 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S5
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Gender
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S5 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S6
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Concepts, skills and activities in the (SIMs), online lessons in Internet and video lessons were relevant to my grade (Class level)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S6 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S7
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Language, terms and terminologies used were appropriate for my age and level (class)
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S7 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S8
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        I could follow lessons on my own without much help form parents or teachers
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S8 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S9
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        I found lesson and learning activities are interesting
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S9 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S10
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        SIMs book and video lessons were helpful when I did not have internet access.
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S10 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S11
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Overall the materials are very useful to help me in learning even after school reopened
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S11 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S12
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Teachers used Self-Instructional Materials to teach us during school closure
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S12 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S13
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       We were sensitized on safe use of computers / mobiles, internet and social media
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S13 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S14
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        New toilets pots were fixed in our school
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S14 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S15
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Toilets have become cleaner
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S15 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S16
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       We have taps for clean drinking water in our school
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S16 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S17
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        We have water taps for washing hands in our school
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S17 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S18
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Did you receive sanitary pads from your school?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S18 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S19
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       For how many months were the sanitary pads sufficient?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S19 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S20
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        I am grateful for receiving the sanitary pads as it is not  easily available in shops in my community
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S20 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S21
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       Sanitary pads distributed by school was of good quality
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S21 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S22
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                       My menstrual hygiene improved after receiving the sanitary pads
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S22 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S23
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        I did not have to stay on leave after receiving the sanitary pads
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S23 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-rose-100 hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S24
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Are you aware of the counselling services in the school?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S24 }}
                                      </td>
                                    </tr>

                                    <tr class="bg-white hover:bg-yellow-300">
                                      <td class="px-6 py-1 text-sm font-medium">
                                        S25
                                      </td>
                                      <td class="px-6 py-1 text-sm font-medium">
                                        Would you feel comfortable to avail the services?
                                      </td>
                                      <td class="px-6 py-1 text-sm">
                                        {{ $value->S25 }}
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
