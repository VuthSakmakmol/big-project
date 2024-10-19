@extends('layouts.app')

@section('content')
    <h1>User Dashboard</h1>
    
    <p>Welcome, {{ Auth::user()->name }}! This is your dashboard.</p>

    <!-- User-specific content (e.g., uploaded photos, text, etc.) -->
    @if($content)
        <h2>Your Content:</h2>
        <img src="{{ asset('storage/' . $content->photo) }}" alt="Your Photo" width="200">
        <p>{{ $content->text }}</p>
    @else
        <p>You haven't uploaded any content yet.</p>
    @endif
@endsection
