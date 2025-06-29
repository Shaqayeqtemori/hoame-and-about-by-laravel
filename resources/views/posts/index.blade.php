<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    <a href="{{ route('posts.create') }}">Create New Post</a>
    <p>When They be more than 2 , They will show!</p>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    @foreach ($posts as $post)
        <div style="border: 1px solid #ccc; margin: 10px; padding: 10px;">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>

            <a href="{{ route('posts.edit', $post->id) }}">Edit</a> |
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    @endforeach

</body>
</html>
