@extends('layouts.app')

@section('title', 'Editează Expoziție')

@section('content')
<h1 class="text-4xl font-bold mb-4">Editează Expoziție</h1>
<form action="{{ route('exhibitions.update', $exhibition->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="title">Titlu</label>
    <input type="text" name="title" id="title" value="{{ $exhibition->title }}" required>
    
    <label for="description">Descriere</label>
    <textarea name="description" id="description">{{ $exhibition->description }}</textarea>

    <label for="location">Locație</label>
    <input type="text" name="location" id="location" value="{{ $exhibition->location }}" required>

    <label for="start_date">Data de Început</label>
    <input type="date" name="start_date" id="start_date" value="{{ $exhibition->start_date }}" required>

    <label for="end_date">Data de Sfârșit</label>
    <input type="date" name="end_date" id="end_date" value="{{ $exhibition->end_date }}" required>

    <label for="image">Imagine</label>
    <input type="file" name="image" id="image">

    <button type="submit" class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-600">Actualizează</button>
</form>
@endsection
