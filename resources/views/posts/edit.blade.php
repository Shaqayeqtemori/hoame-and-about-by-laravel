<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>

    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')

        <label>Title:</label><br>
        <input type="text" name="title" value="{{ $post->title }}"><br><br>

        <label>Content:</label><br>
        <textarea name="content">{{ $post->content }}</textarea><br><br>

        <button type="submit">Update Post</button>
    </form>

    <a href="{{ route('posts.index') }}">Back</a>
</body>
</html>
