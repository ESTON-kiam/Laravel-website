<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <img src="{{ asset('images/logo.jfif')}}" alt="Animal Facts Logo" class="logo">
        <h1>Explore the Majestic World of Animals</h1>
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
    <h2>Contact Us</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <input type="submit" value="Submit">
    </form>
</main>




    <footer>
        <p>&copy; 2024 Designed by Eston</p>
    </footer>
</body>
</html>