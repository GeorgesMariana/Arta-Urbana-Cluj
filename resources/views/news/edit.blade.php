@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit News</h1>

        <form method="POST" action="{{ route('news.update', $article->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                <input type="text" name="title" id="title" value="{{ $article->title }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content</label>
                <textarea name="content" id="content" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="5" required>{{ $article->content }}</textarea>
            </div>
            <div class="mb-4">
                <label for="published_date" class="block text-gray-700 text-sm font-bold mb-2">Published Date</label>
                <input type="date" name="published_date" id="published_date" value="{{ $article->published_date }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @if ($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" alt="Current Image" class="mt-2 w-64 h-64">
                @endif
            </div>
            <div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Update</button>
            </div>
        </form>
    </div>
@endsection
