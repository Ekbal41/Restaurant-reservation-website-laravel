<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Reservations') }} | <a style="font-size: larger; color: red;" href="{{ route('home') }}">Back to Home</a>
        </h2>
        
       
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden shadow-md sm:rounded-lg">
                                <table class="min-w-full">
                                    <thead class="bg-gray-50 white:bg-gray-700">
                                        <tr>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase white:text-gray-400">
                                                Name
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase white:text-gray-400">
                                                Email
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase white:text-gray-400">
                                                Date
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase white:text-gray-400">
                                                Table
                                            </th>
                                            <th scope="col"
                                                class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase white:text-gray-400">
                                                Guests
                                            </th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reservations as $data)
                                            <tr class="bg-white border-b white:bg-gray-800 white:border-gray-700">
                                                <td
                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                                    {{ $data->first_name }} {{ $data->last_name }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-black">
                                                    {{ $data->email }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-black">
                                                    {{ $data->res_date }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-black">
                                                    {{ $data->table->name }}
                                                </td>
                                                <td
                                                    class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-black">
                                                    {{ $data->guest_number }}
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
</x-app-layout>
