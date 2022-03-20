<x-app-layout>
    <x-slot name="header">
      <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Survey - Dashboard') }}
        </h2>
        <span>
          <a href="{{ route('allDataExport') }}">
            <button type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-rose-600 hover:bg-rose-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-500">
              Download All Survey Data
            </button>
          </a>
        </span>
      </div>
    </x-slot>

    <div class="py-12 bg-gradient-to-r from-orange-200 via-yellow-100 to-orange-200">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg- overflow-hidden">
                <div class="p-6 bg-orange-300 shadow-sm sm:rounded-lg">
                    <h1 class="text-3xl font-bold">Summary Statistics</h1>
                    <p class="font-bold pb-6 text-white">as of {{ date('d-M-y', strtotime(now())) }}</p>
                    <div class="grid grid-rows-1 md:grid-cols-2 lg:grid-cols-3 grid-flow-row gap-6">
                        <a href="{{ route('pData_index') }}">
                            <div class="px-4 py-2 bg-green-200 rounded-lg shadow-sm flex justify-between hover:bg-green-700 hover:text-white">
                                <div class="p-4 text-xl font-bold">Principal</div>
                                <div class="flex items-center text-right text-xl font-bold">{{ $principal_count }}</div>
                            </div>
                        </a>

                        <a href="{{ route('cData_index') }}">
                            <div class="px-4 py-2 bg-amber-200 rounded-lg shadow-sm flex justify-between hover:bg-amber-700 hover:text-white">
                                <div class="p-4 text-xl font-bold">Counsellor/Focal Teacher</div>
                                <div class="flex items-center text-right text-xl font-bold">{{ $counsellor_count }}</div>
                            </div>
                        </a>

                        <a href="{{ route('tgData_index') }}">
                            <div class="px-4 py-2 bg-sky-200 rounded-lg shadow-sm flex justify-between hover:bg-sky-700 hover:text-white">
                                <div class="p-4 text-xl font-bold">Teacher - Regular School</div>
                                <div class="flex items-center text-right text-xl font-bold">{{ $teacher_count }}</div>
                            </div>
                        </a>

                        <a href="{{ route('tsData_index') }}">
                            <div class="px-4 py-2 bg-fuchsia-200 rounded-lg shadow-sm flex justify-between hover:bg-fuchsia-700 hover:text-white">
                                <div class="p-4 text-xl font-bold">Teacher - SEN / Special Institute</div>
                                <div class="flex items-center text-right text-xl font-bold">{{ $teachersen_count }}</div>
                            </div>
                        </a>

                        <a href="{{ route('sData_index') }}">
                            <div class="px-4 py-2 bg-rose-200 rounded-lg shadow-sm flex justify-between hover:bg-rose-700 hover:text-white">
                                <div class="p-4 text-xl font-bold">Student</div>
                                <div class="flex items-center text-right text-xl font-bold">{{ $student_count }}</div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="mt-6 p-6 bg-orange-300 shadow-sm sm:rounded-lg">
                    <h1 class="text-3xl font-bold">School-wise Summary</h1>
                    <div class="grid grid-cols-1 md:grid-cols-2 md:gap-2 lg:grid-cols-3 lg:gap-4 flex items-start">
                        <div class="grid grid-cols-1">
                            <h2 class="font-bold">Principal</h2>
                            <div class="flex flex-col">
                              <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                  <div class="shadow overflow-hidden border-b border-green-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-green-200">
                                      <thead class="bg-green-200">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            Sl.#
                                          </th>
                                          <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            School
                                          </th>
                                          <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            Count
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($principals_by_school as $value)
                                        <tr class="bg-white hover:bg-gray-300">
                                          <td class="px-6 text-sm text-gray-900">
                                            {{ $loop->iteration }}
                                          </td>
                                          <td class="px-6 text-sm text-gray-900">
                                            {{ $value->P4 }}
                                          </td>
                                          <td class="px-6 text-sm text-gray-900">
                                            {{ $value->count}}
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
                        <div class="grid grid-cols-1">
                            <h2 class="font-bold">Counsellor / Focal Teacher</h2>
                            <div class="flex flex-col">
                              <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                  <div class="shadow overflow-hidden border-b border-amber-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-amber-200">
                                      <thead class="bg-amber-200">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            Sl.#
                                          </th>
                                          <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            School
                                          </th>
                                          <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            Count
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($counsellors_by_school as $value)
                                        <tr class="bg-white hover:bg-gray-300">
                                          <td class="px-6 text-sm font-medium text-gray-900">
                                            {{ $loop->iteration }}
                                          </td>
                                          <td class="px-6 text-sm font-medium text-gray-900">
                                            {{ $value->C4 }}
                                          </td>
                                          <td class="px-6 text-sm text-gray-900">
                                            {{ $value->count}}
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
                        <div class="grid grid-cols-1">
                            <h2 class="font-bold">Teacher - Regular School</h2>
                            <div class="flex flex-col">
                              <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                  <div class="shadow overflow-hidden border-b border-sky-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-sky-200">
                                      <thead class="bg-sky-200">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            Sl.#
                                          </th>
                                          <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            School
                                          </th>
                                          <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            Count
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($teachers_by_school as $value)
                                        <tr class="bg-white hover:bg-gray-300">
                                          <td class="px-6 text-sm font-medium text-gray-900">
                                            {{ $loop->iteration }}
                                          </td>
                                          <td class="px-6 text-sm font-medium text-gray-900">
                                            {{ $value->TG4 }}
                                          </td>
                                          <td class="px-6 text-sm text-gray-900">
                                            {{ $value->count}}
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
                        <div class="grid grid-cols-1">
                            <h2 class="font-bold">Teacher - SEN / Special Institute</h2>
                            <div class="flex flex-col">
                              <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                  <div class="shadow overflow-hidden border-b border-fuchsia-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-fuchsia-200">
                                      <thead class="bg-fuchsia-200">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            Sl.#
                                          </th>
                                          <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            School
                                          </th>
                                          <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            Count
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($senteachers_by_school as $value)
                                        <tr class="bg-white hover:bg-gray-300">
                                          <td class="px-6 text-sm font-medium text-gray-900">
                                            {{ $loop->iteration }}
                                          </td>
                                          <td class="px-6 text-sm font-medium text-gray-900">
                                            {{ $value->TS4 }}
                                          </td>
                                          <td class="px-6 text-sm text-gray-900">
                                            {{ $value->count}}
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
                        <div class="grid grid-cols-1">
                            <h2 class="font-bold">Student</h2>
                            <div class="flex flex-col">
                              <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                  <div class="shadow overflow-hidden border-b border-rose-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-rose-200">
                                      <thead class="bg-rose-200">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            Sl.#
                                          </th>
                                          <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            School
                                          </th>
                                          <th scope="col" class="px-6 py-3 text-left text-xs font-bold text-gray-900 uppercase tracking-wider">
                                            Count
                                          </th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        @foreach($students_by_school as $value)
                                        <tr class="bg-white hover:bg-gray-300">
                                          <td class="px-6 text-sm font-medium text-gray-900">
                                            {{ $loop->iteration }}
                                          </td>
                                          <td class="px-6 text-sm font-medium text-gray-900">
                                            {{ $value->S3 }}
                                          </td>
                                          <td class="px-6 text-sm text-gray-900">
                                            {{ $value->count}}
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
        </div>
    </div>
</x-app-layout>
