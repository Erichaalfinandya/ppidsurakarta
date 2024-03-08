<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>PPID Kota Surakarta</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('include.style')

</head>

<body class="center">
    <div class="wrapper">
        <form action="function.php" method="POST">
            @csrf
            <h2 class="text-primary">Login</h2>
            <div class="form">
                <input type="email" name="email" class="login mt-3" placeholder="Email" required
                    value="{{ old('email') }}">
                <input type="password" name="password" class="login mt-3" placeholder="Password" required>
                <div class="forget">
                    <label for="remember">
                        <input type="checkbox" id="remember" name="remember">
                        <a href="#">Remember me</a>
                    </label>
                    <a href="#">Forgot password?</a>
                </div>
            </div>
            <button type="submit" class="button-login">Login</button> <br>

            <div class="register">
                <p class="text-dark">Don't have an account? <a href="{{ route('register') }}"
                        class="fw-bold">Register now</a></p>
            </div>
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<p>Username dan Password tidak sesuai !</p> 
                    <p><a href='login.php'> Refresh Page</a></p>";
                }
            }
            session_start();
            if (isset($_SESSION['username'])) {
                header('location:home.php');
            }
            ?>
        </form>
    </div>
</body>


</html>
