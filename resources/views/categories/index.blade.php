<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }} | <a href="{{ route('categories.create') }}"
                style="color: rgb(7, 109, 149); font-size: 20px; font-weight: bold;"> Add New</a>
        </h2>


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 text-gray-900">

                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercase bg-gray-50 white:bg-gray-700 white:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        id
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        description
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        image
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                       Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($datas as $data)
                                <tr class="bg-white border-b white:bg-gray-900 white:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap white:text-dark">
                                        {{ $data->id }}
                                    </th>
                                    <td class="px-6 py-4 font-medium text-gray-900  white:text-dark">
                                        {{ $data->name }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900  white:text-dark">
                                        {{ $data->description  }}
                                    </td>
                                    <td class="px-6 py-4 font-medium text-gray-900  white:text-dark">
                                        <img src="{{ Storage::url($data->image)}}" class="w-16 h-16 rounded" style="object-fit:cover">
                                       
                                    </td>
                                   
                                        <td
                                        class="py-4 px-6 text-sm font-medium text-white whitespace-nowrap white:text-white">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('categories.edit', $data->id) }}"
                                                class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  "><i class="bi bi-pencil-square"></i></a>
                                            <form
                                                class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg "
                                                method="POST"
                                                action="{{ route('categories.destroy', $data->id) }}"
                                                onsubmit="return confirm('Are you sure?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"><i class="bi bi-trash3-fill "></i></button>
                                            </form>
                                        </div>
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
</x-admin-layout>
