@extends('layouts.main')
@section('title','Contact Us')
@section('content')
<h1>Contact Us</h1>
<form action="/contact" method="POST">
    @csrf
    <label >Name:</label>
    <input type="text" name="Name" required><br>
    @error('Name')
    <div style="color:red;">
        {{$message}}
    </div>
    @enderror
    <label >Email:</label>
    <input type="email" name="Email" required><br>
    @error('Email')
    <div style="color:red;">
        {{$message}}
    </div>
    @enderror
    <label >Message:</label>
    <textarea name="message" required></textarea><br>
    @error('message')
    <div style="color:red;">
        {{$message}}
    </div>
    @enderror
    <button type="submit">Send</button>
</form>
@endsection