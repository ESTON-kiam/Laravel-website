<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiger</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <img src="{{ asset('images/logo.jfif')}}" alt="Animal Facts Logo" class="logo">
        <h1>Tiger</h1>
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
        <h2>Tiger Facts</h2>
        <img src="{{ asset('images/tiger.jfif')}}" alt="Tiger" class="animal-image">
        <table>
            <tr>
                <th>Species</th>
                <td>Panthera tigris tigris (Continental) <br> Panthera tigris sondaica (Sunda)</td>
            </tr>
            <tr>
                <th>Weight</th>
                <td>Up to 300 kg (660 lbs)</td>
            </tr>
            <tr>
                <th>Conservation Status</th>
                <td>Endangered</td>
            </tr>
        </table>
        <p>Tigers are the largest of all the Asian big cats. They rely on sight and sound for hunting and are known to eat up to 80 pounds of meat at once.</p>
    </main>

    <footer>
      <p>&copy; 2024 Designed by Eston</p>
    </footer>
</body>
</html>