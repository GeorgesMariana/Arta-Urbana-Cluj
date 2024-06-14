@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $article->title }}</h1>
        <p>{{ $article->content }}</p>
        <p><strong>Published Date:</strong> {{ $article->published_date }}</p>

        @if ($article->image)
            <img src="{{ asset('storage/' . $article->image) }}" alt="Image" class="w-64 h-64">
        @endif

        <!-- Afișează comentariile -->
        <h2 class="mt-4">Comentarii</h2>
        @foreach($article->comments as $comment)
            <div class="comment border p-2 mb-2">
                <p>{{ $comment->content }}</p>
                <p><small>De: {{ $comment->user->name }}</small></p>
            </div>
        @endforeach

        <!-- Form pentru adăugarea unui comentariu -->
        @auth
        <form action="{{ route('comments.store') }}" method="POST" class="mt-4">
            @csrf
            <input type="hidden" name="commentable_id" value="{{ $article->id }}">
            <input type="hidden" name="commentable_type" value="App\Models\News">
            <textarea name="content" class="w-full border p-2" placeholder="Adaugă un comentariu"></textarea>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-2">Adaugă</button>
        </form>
        @endauth
    </div>
@endsection
