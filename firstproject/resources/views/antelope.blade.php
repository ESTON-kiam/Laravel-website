<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antelope</title>
    <link rel="stylesheet" href="{{ URL('css/styles.css') }}">
</head>
<body>
    <header>
        <img src="{{ URL('images/logo.jfif')}}" alt="Animal Facts Logo" class="logo">
        <h1>Antelope</h1>
        <nav>
        <ul>
    <li><a href="{{ URL('home') }}">Home</a></li>
    <li><a href="{{ URL('lion') }}">African Lion</a></li>
    <li><a href="{{ URL('rhino') }}">Rhino</a></li>
    <li><a href="{{ URL('antelope') }}">Antelope</a></li>
    <li><a href="{{ URL('tiger') }}">Tiger</a></li>
    <li><a href="{{ URL('contact.create') }}">Contact</a></li>
    <li><a href="{{URL('login')}}">Login</a></li>
</ul>
        </nav>
    </header>

    <main>
        <h2>Antelope Facts</h2>
        <img src="{{ URL('images/antelope.jfif')}}" alt="Antelope" class="animal-image">
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
