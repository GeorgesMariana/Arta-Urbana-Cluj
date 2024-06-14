@extends('layouts.app')

@section('content')
<div class="container mx-auto py-6">
    <h1 class="text-4xl font-bold mb-4 text-center">News</h1>
    <a href="{{ route('admin.news.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Create New News</a>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Title</th>
                <th class="px-4 py-2">Published Date</th>
                <th class="px-4 py-2">Image</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $article)
                <tr>
                    <td class="border px-4 py-2">{{ $article->title }}</td>
                    <td class="border px-4 py-2">{{ $article->published_date }}</td>
                    <td class="border px-4 py-2">
                        @if ($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" alt="Image" class="w-16 h-16">
                        @endif
                    </td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('admin.news.show', $article->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a>
                        <a href="{{ route('admin.news.edit', $article->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                        <form action="{{ route('admin.news.destroy', $article->id) }}" method="POST" class="inline">
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
