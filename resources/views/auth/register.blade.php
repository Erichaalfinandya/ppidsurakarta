<head>
    <meta charset="utf-8">
    <title>PPID Kota Surakarta</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include("include.style")
</head>

<body class="center">
    <div class="wrapper">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <h2 class="text-primary">Register</h2>
            <div class="form">
                <input type="text" name="nama" class="login mt-3" placeholder="Nama Lengkap" required>
                <input type="email" name="email" class="login mt-3" placeholder="Email" required>
                <input type="password" name="password" class="login mt-3" placeholder="Password" required>
                <input type="password" name="password_confirmation" class="login mt-3" placeholder="Confirm Password"
                    required>
                <div class="forget">
                    <label for="remember">
                        <input type="checkbox" id="remember" name="remember">
                        <a href="#">Remember me</a>
                    </label>
                    <a href="">Forgot password?</a>
                </div>
            </div>
            <button type="submit" class="button-login">Register</button> <br>
            <div class="register">
                <p class="text-dark">Already have an account? <a href="{{ route('login') }}"
                        class="fw-bold">Login</a></p>
            </div>
        </form>

    </div>
</body>
