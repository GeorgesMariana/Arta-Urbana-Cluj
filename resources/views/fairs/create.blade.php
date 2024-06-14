@extends('layouts.app')

@section('title', 'Create Fair')

@section('content')
<h1 class="text-4xl font-bold mb-4">Create Fair</h1>

<form action="{{ route('admin.fairs.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description"></textarea>
    </div>
    <div>
        <label for="location">Location:</label>
        <input type="text" name="location" id="location" required>
    </div>
    <div>
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date" required>
    </div>
    <div>
        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date" required>
    </div>
    <button type="submit">Create</button>
</form>
@endsection
