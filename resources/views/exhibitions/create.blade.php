@extends('layouts.app')

@section('title', 'Adaugă Expoziție')

@section('content')
<h1 class="text-4xl font-bold mb-4">Adaugă Expoziție</h1>
<form action="{{ route('exhibitions.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Titlu</label>
    <input type="text" name="title" id="title" required>
    
    <label for="description">Descriere</label>
    <textarea name="description" id="description"></textarea>

    <label for="location">Locație</label>
    <input type="text" name="location" id="location" required>

    <label for="start_date">Data de Început</label>
    <input type="date" name="start_date" id="start_date" required>

    <label for="end_date">Data de Sfârșit</label>
    <input type="date" name="end_date" id="end_date" required>

    <label for="image">Imagine</label>
    <input type="file" name="image" id="image">

    <button type="submit" class="bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-600">Salvează</button>
</form>
@endsection

