<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Galleries') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        List of Galleries
                    </div>

                    <div class="mt-6 text-gray-500">
                        <a href="{{ route('admin.galleries.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Gallery</a>
                        <table class="table-auto w-full mt-4">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galleries as $gallery)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $gallery->id }}</td>
                                        <td class="border px-4 py-2">{{ $gallery->name }}</td>
                                        <td class="border px-4 py-2">
                                            <a href="{{ route('admin.galleries.edit', $gallery) }}" class="text-blue-500">Edit</a>
                                            <form action="{{ route('admin.galleries.destroy', $gallery) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500 ml-2">Delete</button>
                                            </form>
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
</x-app-layout>
