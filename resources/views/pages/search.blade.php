<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Puliyankulam IOC Turn #01
        </h2>
    </x-slot>

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="max-w-7xl mx-auto">

                <div class="flex flex-col">
                    <div class="overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                    <thead class="bg-gray-100 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col" class="p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-all" type="checkbox"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-all" class="sr-only">checkbox</label>
                                                </div>
                                            </th>
                                            <th scope="col"
                                                class="text-xs font-medium tracking-wider text-left text-gray-700  dark:text-gray-400">
                                                Order No
                                            </th>
                                            <th scope="col"
                                                class="text-xs font-medium tracking-wider text-left text-gray-700  dark:text-gray-400">
                                                Vehicle No
                                            </th>
                                            <th scope="col"
                                                class="text-xs font-medium tracking-wider text-left text-gray-700  dark:text-gray-400">
                                                Stay
                                            </th>
                                            @auth
                                                <th scope="col"
                                                    class="text-xs font-medium tracking-wider text-left text-gray-700  dark:text-gray-400">
                                                    Action
                                                </th>
                                            @endauth
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        
                                        @foreach ($reuslt as $vehicle)
                                        
                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <td class="p-4 w-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-table-1" type="checkbox"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-table-1" class="sr-only">checkbox</label>
                                                </div>
                                            </td>
                                            <td
                                                class="text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{$vehicle->id}}
                                            </td>
                                            <td class="text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                {{$vehicle->vehicleNumber}}
                                            </td>
                                            <td class="text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                @if ($vehicle->staus == 1)
                                                <span
                                                class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                                <span aria-hidden
                                                    class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                                <span class="relative">Yes</span>
                                            </span>
                                            @else
                                            <span
                                            class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                                            <span aria-hidden
                                                class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                            <span class="relative">No</span>
                                        </span>
                                                @endif
                                            </td>
                                            @auth
                                                <td class="p-4 w-4">
                                                    <div class="flex justify-center">
                                                        <a href="{{ url('edit-vehicle/'.$vehicle->id) }}">
                                                            <svg class="w-7 h-7 text-blue-500 hover:text-blue-600 rounded-full hover:bg-gray-100 p-1"
                                                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            @endauth
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

</x-app-layout>
