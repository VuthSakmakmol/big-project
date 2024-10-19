@extends('layouts.app')

@section('content')
    <h1>Create New Content</h1>

    <form method="POST" action="{{ route('admin.content.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="user_id">Select User:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="photo">Upload Photo:</label>
            <input type="file" name="photo" id="photo" class="form-control">
        </div>

        <div class="form-group">
            <label for="text">Text:</label>
            <input type="text" name="text" id="text" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
