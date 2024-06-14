@extends('layouts.app')

@section('title', 'Târguri de Artă')

@section('content')
<h1 class="text-4xl font-bold mb-4">Târguri de Artă</h1>
<a href="{{ route('admin.fairs.create') }}" class="inline-block bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-600">Create Fair</a>
<ul>
    @foreach ($fairs as $fair)
        <li><a href="{{ route('admin.fairs.show', $fair) }}" class="hover:underline">{{ $fair->name }}</a></li>
    @endforeach
</ul>
@endsection
