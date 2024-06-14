@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $exhibition->title }}</h1>
    <p>{{ $exhibition->description }}</p>

    <!-- Afișează comentariile -->
    <h2>Comentarii</h2>
    @foreach($exhibition->comments as $comment)
        <div class="comment">
            <p>{{ $comment->content }}</p>
            <p><small>De: {{ $comment->user->name }}</small></p>
        </div>
    @endforeach

    <!-- Form pentru adăugarea unui comentariu -->
    @auth
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="commentable_id" value="{{ $exhibition->id }}">
        <input type="hidden" name="commentable_type" value="App\Models\Exhibition">
        <textarea name="content" placeholder="Adaugă un comentariu"></textarea>
        <button type="submit">Adaugă</button>
    </form>
    @endauth
</div>
@endsection
