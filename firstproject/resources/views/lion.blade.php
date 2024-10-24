<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>African Lion</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <img src="{{ asset('images/logo.jfif')}}" alt="Animal Facts Logo" class="logo">
        <h1>African Lion</h1>
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
        <h2>The African Lion</h2>
        <img src="{{ asset('images/lion.jfif')}}" alt="African Lion" class="animal-image">
        <table>
            <tr>
                <th>Scientific Name</th>
                <td>Panthera leo</td>
            </tr>
            <tr>
                <th>Conservation Status</th>
                <td>Vulnerable</td>
            </tr>
            <tr>
                <th>Weight</th>
                <td>125 to 272 kg (277 to 600 lbs)</td>
            </tr>
            <tr>
                <th>Life Span</th>
                <td>10 to 18 years in the wild</td>
            </tr>
        </table>

        <p>The  Lion is the second-largest living big cat after the tiger. Males are unique for their thick mane, which darkens with age. Both males and females roar, and their roar can be heard as far as 8 kilometers away.</p>
    </main>

    <footer>
      <p>&copy; 2024 Designed by Eston</p>
    </footer>

</html>
