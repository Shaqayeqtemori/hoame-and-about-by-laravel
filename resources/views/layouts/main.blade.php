<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>My Laravel Site</h1>
        <nav>
            <a href="/">Home</a>
            <a href="/about">about</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p> 2025 -created by Shaqayeq</p>
    </footer>
    
</body>
</html>