<!DOCTYPE html>
<html>
<head>
    <title>All Posts</title>
</head>
<body>
    <h1>All Posts</h1>

    <a href="{{ route('posts.create') }}">Create New Post</a>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    @foreach ($posts as $post)
        <div style="border: 1px solid #ccc; margin: 10px; padding: 10px;">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
    @endforeach
</body>
</html>
