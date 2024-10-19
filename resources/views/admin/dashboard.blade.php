@extends('layouts.app')

@section('content')
    <h1>Admin Dashboard</h1>
    
    <p>Welcome, Admin! You have full control over the users and their content.</p>

    <!-- Admin functionalities -->
    <a href="{{ route('admin.users') }}">Manage Users</a>
    <a href="{{ route('admin.content.create') }}">Create New Content</a>
@endsection
