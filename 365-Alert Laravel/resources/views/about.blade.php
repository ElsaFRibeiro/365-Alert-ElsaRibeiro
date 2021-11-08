{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'About')

{{-- CSS Link --}}
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/about.css'); }}">
@endsection

{{-- Main Content Section --}}
@section('content')

<h1 id="about_us_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus nesciunt totam modi repudiandae error sunt ex ullam numquam nobis quia, harum pariatur corrupti reprehenderit, sequi laudantium assumenda eos itaque mollitia!</h1>
<h2 id="contact_title">About Us</h2>
<article class="about_team">
    <section class="about">
        <img src="{{URL::asset('pictures/About_Alex.jpg')}}" alt="photo_alex">
        <h2 id="name">Alexandru Darii</h2>
        <h3 id="title">Junior Web Developer</h3>
        <h4 id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quia velit quos reiciendis doloribus. Tenetur soluta, exercitationem, eveniet veniam dolorem ea vero repudiandae voluptas placeat, suscipit sed necessitatibus dignissimos dolor!</h4>
        <a href="https://www.linkedin.com/in/alexandru-darii/"><img id="linkedin" src="{{URL::asset('pictures/About_Linkedin.svg')}}" alt=""></a>
    </section>
    <section class="about">
        <img src="{{URL::asset('pictures/About_Diogo.jpg')}}" alt="photo_diogo">
        <h2 id="name">Diogo Cordas</h2>
        <h3 id="title">Junior Web Developer</h3>
        <h4 id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quia velit quos reiciendis doloribus. Tenetur soluta, exercitationem, eveniet veniam dolorem ea vero repudiandae voluptas placeat, suscipit sed necessitatibus dignissimos dolor!</h4>
        <a href="https://www.linkedin.com/in/diogo-cordas/"><img id="linkedin" src="{{URL::asset('pictures/About_Linkedin.svg')}}" alt=""></a>
    </section>
    <section class="about">
        <img src="{{URL::asset('pictures/About_Elsa.jpg')}}" alt="photo_elsa">
        <h2 id="name">Elsa Ribeiro</h2>
        <h3 id="title">Junior Web Developer</h3>
        <h4 id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quia velit quos reiciendis doloribus. Tenetur soluta, exercitationem, eveniet veniam dolorem ea vero repudiandae voluptas placeat, suscipit sed necessitatibus dignissimos dolor!</h4>
        <a href="https://www.linkedin.com/in/elsafreitasribeiro/"><img id="linkedin" src="{{URL::asset('pictures/About_Linkedin.svg')}}" alt=""></a>
    </section>
    <section class="about">
        <img src="{{URL::asset('pictures/About_John.jpg')}}" alt="photo_john">
        <h2 id="name">John Olivier</h2>
        <h3 id="title">Junior Web Developer</h3>
        <h4 id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quia velit quos reiciendis doloribus. Tenetur soluta, exercitationem, eveniet veniam dolorem ea vero repudiandae voluptas placeat, suscipit sed necessitatibus dignissimos dolor!</h4>
        <a href="https://www.linkedin.com/in/john-olivier-maia/"><img id="linkedin" src="{{URL::asset('pictures/About_Linkedin.svg')}}" alt=""></a>
    </section>
    <section class="about">
        <img src="{{URL::asset('pictures/About_Jude.jpg')}}" alt="photo_jude">
        <h2 id="name">Jude Treanor</h2>
        <h3 id="title">Junior Web Developer</h3>
        <h4 id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quia velit quos reiciendis doloribus. Tenetur soluta, exercitationem, eveniet veniam dolorem ea vero repudiandae voluptas placeat, suscipit sed necessitatibus dignissimos dolor!</h4>
        <a href="https://www.linkedin.com/in/jude-treanor/"><img id="linkedin" src="{{URL::asset('pictures/About_Linkedin.svg')}}" alt=""></a>
    </section>
</article>


@endsection

{{-- Footer Section --}}
@section('footer')
    
@endsection

{{-- Scripts links --}}
@section('scripts')
    
@endsection
