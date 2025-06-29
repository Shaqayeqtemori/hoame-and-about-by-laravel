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
            <a href="/contact">Contact</a>
            <a href="/posts">posts</a>
        </nav>
    </header>
    <main>
        {{-- Flash Message --}}
        @if (session('success'))
        <div style="background:#d4edda;color:#155724;padding:10px;mrgin-bottom:15px;border-radius:5px;">
            {{ session('success')}}
        </div>
        @endif
        @if (session('error'))
        <div style="background:#f8d7da;color:#721c24;padding:10px;mrgin-bottom:15px;border-radius:5px;">
            {{ session('error')}}
        </div>
        @endif
        {{-- page content --}}
        @yield('content')
    </main>
    <footer>
        <p> 2025 -created by Shaqayeq</p>
    </footer>
    
</body>
</html>