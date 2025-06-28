<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    @extends('layouts.main')
    @section('title','Home Page')
    @section('content')
    <h1>Welcome to Laravel</h1>
    <a href="/about">About</a>
    @endsection
</body>
</html>