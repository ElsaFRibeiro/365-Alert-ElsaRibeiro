{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Contact')

{{-- CSS Link --}}
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/contact.css'); }}">
@endsection

{{-- Main Content Section --}}
@section('content')
<main>

    <section class="contact_image">
        <div></div>
    </section>
    <h2 id="contact_title">Contact Us</h2>
@if(Session::has('message'))
<div class="alert alert-success">
{{Session('message')}}
</div>
@endif
    <div class="form_container">
        <form action="" method="POST" id="form">
            @csrf
            <label for="name">Name</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email"><br>
            <label for="message">Message</label><br>
            <textarea name="message" id="message" cols="22" rows="4"></textarea><br>
            <div class="containerSubmit"><input type="submit" name="contact.submit" id="submit_button" value="Send"></div>
        </form>
    </div>

    <section class="images">
        <a href="https://www.inondations.lu/"><img src="{{URL::asset('pictures/GOV_Contact_Page.jpg')}}" alt="GOV_link" ></a>
        <a href="https://www.meteolux.lu/"><img src="{{URL::asset('pictures/MeteoLux_Contact Page.jpg')}}" alt="MeteoLux"></a>
        <a href="https://www.meteoalarm.org/en/"><img src="{{URL::asset('pictures/MeteoAlarm_Contact_Page.png')}}" alt="MeteoAlarm"></a>
        <a href="https://112.public.lu/fr/organisation/administration.html"><img src="{{URL::asset('pictures/CGDIS_Contact_Page.jpg')}}" alt="CGDIS"></a>
        <a href="https://rss-hydro.lu/"><img src="{{URL::asset('pictures/RSS_Contact Page.jpg')}}" alt="RSS"></a>
    </section>
</main>

@endsection

{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection
