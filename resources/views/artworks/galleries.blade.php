@extends('layouts.app')

@section('title', 'Galleries')

@section('content')
<h1 class="text-4xl font-bold mb-4 text-center">Explore the Art Galleries of Cluj</h1>
<ul class="list-disc list-inside">
    <li><a href="{{ url('galleries/quadro') }}" class="hover:underline">Galeria Quadro</a></li>
    <li><a href="{{ url('galleries/unirea') }}" class="hover:underline">Unirea Open Studio</a></li>
    <li><a href="{{ url('galleries/viewingroom17') }}" class="hover:underline">Viewing Room 17</a></li>
    <li><a href="{{ url('galleries/centruldeinteres') }}" class="hover:underline">Centrul de Interes</a></li>
    <li><a href="{{ url('galleries/bijugallery') }}" class="hover:underline">Biju Gallery</a></li>
    <li><a href="{{ url('galleries/sabotgallery') }}" class="hover:underline">Sabot Gallery</a></li>
    <li><a href="{{ url('galleries/zinagallery') }}" class="hover:underline">Zina Gallery</a></li>
    <li><a href="{{ url('galleries/relicvargallery') }}" class="hover:underline">Relicvar Gallery</a></li>
    <li><a href="{{ url('galleries/cosmichouse') }}" class="hover:underline">The Cosmic House Gallery</a></li>
</ul>
@endsection
