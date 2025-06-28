@extends('layouts.main')
@section('title','Contact Us')
@section('content')
<h1>Contact Us</h1>
<form action="/contact" method="POST">
    @csrf
    <label >Name:</label>
    <input type="text" name="Name" required><br>
    <label >Email:</label>
    <input type="email" name="Email" required><br>
    <label >Message:</label>
    <textarea name="message" required></textarea><br>
    <button type="submit">Send</button>
</form>
@endsection