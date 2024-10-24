<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Facts</title>
    <link rel="stylesheet" href="{{ URL('css/styles.css') }}">
</head>
<body>
    <header>
        <img src="{{ URL('images/logo.jfif')}}" alt="Animal Facts Logo" class="logo">
        <h1>Welcome to Animal Facts</h1>
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
    <h2>Explore the Majestic World of Animals</h2>
    <p>Discover amazing facts about the African Lion, Rhinos, Antelopes, and Tigers.</p>
    <p>The African Lion is known for its majestic mane and powerful roar, which can be heard up to 8 kilometers away.</p>
    <p>Rhinos, with their distinct horns, are among the oldest species on Earth, having existed for millions of years.</p>
    <p>Antelopes are known for their incredible speed and agility, adapting to various environments across the globe.</p>
    <p>Tigers are solitary hunters, renowned for their strength and stealth in the wild.</p>
</main>

    <footer>
        <p>&copy; 2024 Designed by Eston</p>
    </footer>
</body>
</html>
