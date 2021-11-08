<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    @yield('css')
</head>

<body>
    <!-- Header with menu and login/register -->
    <header>

        <img id="action" src="{{ URL::asset('pictures/Menu_Colapsed_white.svg') }}" alt="">

        <h2 id="logo">365 Alert</h2>

        <img id="user-icon" src="{{ URL::asset('pictures/User_WhiteStroke_Header.svg') }}" alt="">

    </header>


    <ul id="nav-two">
        <li><a href="{{ route('about') }}">About</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
    </ul>


    <main class="content">
        @yield('content')
    </main>
    <footer>
        <!-- footer with two divs and logo image -->
        <section id="footer">
            <div id="container">

                <img src="{{ URL::asset('pictures/Facebook_Footer_white.svg') }}" alt="">
                <img src="{{ URL::asset('pictures/Instagram_Footer_white.svg') }}" alt="">
                <img src="{{ URL::asset('pictures/Twitter_Footer_white.svg') }}" alt="">

            </div>
            <ul class="terms">
                <li><a href="{{ route('terms') }}">Terms and conditions</a></li>
            </ul>

            <div class="logo">
                <h3>Logo</h3>
                <h3>&copy;Alert copyright</h3>
            </div>
        </section>

        @yield('footer')
    </footer>
    {{-- @include('layouts.nav') --}}
    @yield('scripts')

    <script src="{{ URL::asset('js/templateTwo.js') }}"></script>

</body>

</html>
