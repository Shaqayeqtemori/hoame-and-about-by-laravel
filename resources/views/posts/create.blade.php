@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add New Post</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label>Title:</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label>Content:</label>
            <textarea name="content" required></textarea>
        </div>
        <button type="submit">Save</button>
    </form>
</div>
@endsection
