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
        

        <h2 id="logo"><a href="{{ route('home1') }}">365 Alert</a></h2>


        @guest
            <div class="user-container">
                <a href="{{ route('home1') }}"><img id="user-icon"
                        src="{{ URL::asset('pictures/User_WhiteStroke_Header.svg') }}" alt=""></a>
            @endguest
            @auth
            <div>
                <a href="{{ route('client-settings') }}"><img id="user-icon"
                        src="{{ URL::asset('pictures/ClientSettings_WhiteStroke_Header.svg') }}" alt=""></a>
                <img id="user-icon" src="{{ URL::asset('pictures/User_WhiteFull_Header_Logged.svg') }}" alt=""></a>
            </div>
            </div>
        @endauth
    </header>

    @auth
        <ul id="navigation">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('alerts') }}">Alerts</a></li>
            <li><a href="{{ route('procedures') }}">Procedures</a></li>
            <li><a href="{{ route('terms') }}">Terms</a></li>
            <li><a href="{{ route('admin') }}">Admin</a></li>
        </ul>
        <ul class="register">
            <button><a href="{{ route('client-settings') }}">My Settings</a></button>
            <button><a href="{{ route('logout') }}">Log Out</a></button>
        </ul>
    @endauth
    @guest
        <ul id="navigation-short">
            <li><a href="{{ route('home1') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    @endguest





    <main class="content">
        @yield('content')
    </main>
    <footer>
        <section class="need-help-container">
            <h2 class="need-help">Need Help?</h2>
            <section class="help_container">
                <img src="{{ URL::asset('pictures/CGDIS_3_copie.jpg') }}" id="image_cgdis" alt="help">
                <article id="icons_container">
                    <a href="tel">
                        <div>
                            <img src="{{ URL::asset('pictures/CGDIS_112_White.SVG') }}" id="icon_number" alt="help">
                            <p id="number_112">112</p>
                        </div>
                    </a>
                    <a href="WWW.112.PUBLIC.LU">
                        <div>
                            <img src="{{ URL::asset('pictures/CGDIS_Website_White.SVG') }}" id="icon_website"
                                alt="help">
                            <p id="website"><a href="url" style="color:white">www.112.public.lu</a></p>
                        </div>
                    </a>
                    <div>
                        <img src="{{ URL::asset('pictures/CGDIS_APP_White.SVG') }}" id="icon_app" alt="help">
                        <p id="gov_app">GOUVALERT</p>
                    </div>
                </article>
            </section>

        </section>
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
    <script src="{{ URL::asset('js/template.js') }}"></script>
    <script src="{{ URL::asset('js/guestnav.js') }}"></script>
</body>

</html>
