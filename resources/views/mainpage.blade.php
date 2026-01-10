<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Logis Bootstrap --}}
    <link href="{{ asset('logis/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('logis/assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mainpage.css') }}" rel="stylesheet">
</head>

<body>

<!-- ===== HEADER ===== -->
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="{{ route('mainpage') }}" class="logo d-flex align-items-center">
            <h1>share<span>Ameal</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="active" href="{{ route('mainpage') }}">Home</a></li>

                @auth
                    <li><a href="{{ route('profile') }}">Profile</a></li>
                @endauth

                @guest
    <li><a href="{{ route('login') }}" class="btn btn-primary">Login</a></li>
@endguest

            </ul>
        </nav>

    </div>
</header>

<!-- ===== MAIN CONTENT ===== -->
<main class="container" style="margin-top:120px">
    <div class="main-hero text-center">

        <h2>Welcome to ShareAMeal</h2>
        <p>Share food, reduce waste, and help the community 🌱</p>

        @auth
            <a href="{{ route('profile') }}" class="btn btn-primary btn-lg">
                Go to Profile
            </a>
        @endauth

        @guest
            <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                Login to Continue
            </a>
        @endguest

    </div>
</main>

<!-- ===== FOOTER ===== -->
<footer id="footer" class="footer mt-5">
    <div class="container text-center">
        © ShareAMeal | admin.shareameal@gmail.com
    </div>
</footer>

<script src="{{ asset('logis/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

