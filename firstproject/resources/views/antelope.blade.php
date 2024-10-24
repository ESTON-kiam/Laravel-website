<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antelope</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <img src="{{ asset('images/logo.jfif')}}" alt="Animal Facts Logo" class="logo">
        <h1>Antelope</h1>
        <nav>
        <ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('lion') }}">African Lion</a></li>
    <li><a href="{{ route('rhino') }}">Rhino</a></li>
    <li><a href="{{ route('antelope') }}">Antelope</a></li>
    <li><a href="{{ route('tiger') }}">Tiger</a></li>
    <li><a href="{{ route('contact.create') }}">Contact</a></li>
    <li><a href="{{route('login')}}">Login</a></li>
</ul>
        </nav>
    </header>

    <main>
        <h2>Antelope Facts</h2>
        <img src="{{ asset('images/antelope.jfif')}}" alt="Antelope" class="animal-image">
        <p>Antelopes are hoofed mammals with a vast variety of species. The largest antelope is the giant eland, while the smallest is the royal antelope.</p>
        <ul>
            <li>Giant Eland: Up to 182 cm tall</li>
            <li>Royal Antelope: As small as 25 cm</li>
        </ul>
    </main>

    <footer>
        <p>&copy; 2024 Designed by Eston</p>
    </footer>
</body>
</html>
