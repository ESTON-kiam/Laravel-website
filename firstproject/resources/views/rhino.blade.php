<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rhino</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <img src="{{ URL('images/logo.jfif')}}" alt="Animal Facts Logo" class="logo">
        <h1>Rhino</h1>
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
        <h2>Rhino Facts</h2>
        <img src="{{ URL('images/rhino.jfif')}}" alt="Rhino" class="animal-image">
        <table>
            <tr>
                <th>Black Rhino (Diceros bicornis)</th>
                <th>White Rhino (Ceratotherium simum)</th>
            </tr>
            <tr>
                <td>Weight: 1 to 1.5 tons</td>
                <td>Weight: More than 2 tons</td>
            </tr>
            <tr>
                <td>Critically Endangered</td>
                <td>Near Threatened</td>
            </tr>
        </table>
        <p>There are two species of African rhinos: the black rhino and the white rhino. Both species have two horns and are vulnerable to poaching.</p>
    </main>

    <footer>
        <p>&copy; 2024 Designed by Eston</p>
    </footer>
</body>
</html>
