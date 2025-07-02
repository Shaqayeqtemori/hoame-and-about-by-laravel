<h1>Welcome,{{Auth::user()->name}}!</h1><!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        body {
            font-family: Tahoma, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
            padding: 100px;
            direction: rtl;
        }
        h1 {
            color: #2c3e50;
            font-size: 48px;
        }
        p {
            font-size: 24px;
            color: #34495e;
        }
    </style>
</head>
<body>
    <h1>
        Welcome, {{ Auth::check() ? Auth::user()->name : 'Guest' }}!
    </h1>
    <p>I wish You enjoy !</p>
</body>
</html>
