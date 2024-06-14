@extends('layouts.app')

@section('title', 'Editează Târg')

@section('content')
<h1 class="text-4xl font-bold mb-4">Editează Târg</h1>
<form action="{{ route('fairs.update', $fair) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Nume</label>
    <input type="text" name="name" id="name" value="{{ $fair->name }}" required>
    
    <label for="description">Descriere</label>
    <textarea name="description" id="description">{{ $fair->description }}</textarea>

    <label for="location">Locație</label>
    <input type="text" name="location" id="location" value="{{ $fair->location }}" required>

    <label for="start_date">Data de Început</label>
    <input type="date" name="start_date" id="start_date" value="{{ $fair->start_date }}" required>

    <label for="end_date">Data de Sfârșit</label>
    <input type="date" name="end_date" id="end_date" value="{{ $fair->end_date }}" required>

    <button type="submit" class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-600">Salvează</button>
</form>
@endsection
