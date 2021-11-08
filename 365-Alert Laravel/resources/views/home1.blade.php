{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Home')

{{-- CSS Link --}}
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/home1.css'); }}">
@endsection

{{-- Main Content Section --}}
@section('content')


<section class="home">
    <div class="register-box">
        <p class="intro-text">Be alert 365 days <br> if potential flood appears</p>

        <a style="text-decoration:none" class="btn-register" id="flex_buttons" href="{{ route('register') }}">Sign up</a>
        <a style="text-decoration:none" class="btn-login" id="flex_buttons" href="{{ route('login') }}">Login</a>

    </div>
    <ul class="icons_container">
        <li class="icons_flex">
            <div class="i_container">
                <img class="img1" src="{{URL::asset('../pictures/Flood_Alert_Email_Main.svg')}}" id="img1" alt=""><br>
                <p>Receive an email alert with possible floods</p>
            </div>
            <div class="i_container">
                <img class="img2" src="{{URL::asset('../pictures/Check_Water_Level_Main.svg')}}" id="img2" alt=""><br>
                <p>Check the water level of any location</p>
            </div>
            <div class="i_container">
                <img class="img3" src="{{URL::asset('../pictures/Procedures_Main.svg')}}" id="img3" alt=""><br>
                <p>Follow important safest procedures</p>
            </div>
        </li>
    </ul>
    <article class="flood_container">
        <h1 class="flood-map">Flood Map</h1>
        <div class="image_map"></div>
    </article>
</section>

@endsection

{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection
