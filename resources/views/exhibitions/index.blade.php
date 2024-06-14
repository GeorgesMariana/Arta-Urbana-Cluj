@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-4xl font-bold mb-4 text-center">Exhibitions</h1>
    <a href="{{ route('admin.exhibitions.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Create New Exhibition</a>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Location</th>
                <th class="px-4 py-2">Start Date</th>
                <th class="px-4 py-2">End Date</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exhibitions as $exhibition)
                <tr>
                    <td class="border px-4 py-2">{{ $exhibition->name }}</td>
                    <td class="border px-4 py-2">{{ $exhibition->location }}</td>
                    <td class="border px-4 py-2">{{ $exhibition->start_date }}</td>
                    <td class="border px-4 py-2">{{ $exhibition->end_date }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.exhibitions.show', $exhibition->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                        <a href="{{ route('admin.exhibitions.edit', $exhibition->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                        <form action="{{ route('admin.exhibitions.destroy', $exhibition->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
