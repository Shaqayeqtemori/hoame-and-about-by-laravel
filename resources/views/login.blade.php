<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8" />
    <style>
        body {
            font-family: Tahoma, sans-serif;
            direction: rtl;
            padding: 50px;
            background-color: #f9f9f9;
        }
        form {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf


        @if($errors->any())
            <div class="error">{{ $errors->first() }}</div>
        @endif

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">ورود</button>
    </form>
</body>
</html>
