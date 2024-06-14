@extends('layouts.app')

@section('title', $fair->name)

@section('content')
<h1 class="text-4xl font-bold mb-4">{{ $fair->name }}</h1>
<p>{{ $fair->description }}</p>
<p><strong>Location:</strong> {{ $fair->location }}</p>
<p><strong>Start Date:</strong> {{ $fair->start_date }}</p>
<p><strong>End Date:</strong> {{ $fair->end_date }}</p>
@endsection
