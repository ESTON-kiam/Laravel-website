<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Meru Doctors Plaza</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

</head>

<body>

    <form method="post" action="">
        <h2>Admin Login</h2>
        
        <div class="input-container">
            <i class="fas fa-user"></i>
            <input type="email" class="user" name="email" placeholder="Email" required>
        </div>

        <div class="input-container">
            <i class="fas fa-lock"></i>
            <input type="password" class="lock" name="password" placeholder="Password" required>
        </div>

        <button type="submit">Login</button>
        <a href="forgot_password.html">Forgot password?</a>
        <center><a href="{{route('home')}}">Home</a></center>
    </form>

    <?php
    session_start();

    $host = 'localhost';
    $dbname = 'meru doctors plaza';
    $user = 'root';
    $pass = '';

    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $stmt = $conn->prepare("SELECT id, password FROM members WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $hashed_password);
            $stmt->fetch();

            if (password_verify($password, $hashed_password)) {
                $_SESSION['email'] = $email;
                $_SESSION['user_id'] = $user_id;
                $_SESSION['last_activity'] = time();

                if ($user_id == 1) {
                    $_SESSION['role'] = 'super_admin';
                }

                echo "<p class='success'>Login successful!</p>";
                header("Location: admin-appointment.php");
                exit();
            } else {
                echo "<p class='error'>Invalid password!</p>";
            }
        } else {
            echo "<p class='error'>No account found with that email!</p>";
        }

        $stmt->close();
    }

    $conn->close();
    ?>

</body>

</html>
