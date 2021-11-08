{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Login')

{{-- CSS Link --}}
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">

@endsection

{{-- Main Content Section --}}
@section('content')

    <img src="{{ URL::asset('../css/logos/house.svg') }}" alt="" class="icon_365">
    <h3>Login</h3>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form action="" method="post">
        <!-- Security token for Laravel : Mandatory in forms -->
        @csrf
        <section class="flex_container">
            <input type="email" name="email" placeholder="Email" class="input-email" onfocus="this.placeholder=''"
                onblur="this.placeholder='Email'">
            <p class="login_errors">{{ $errors->first('email') }}</p>
            <input type="password" name="password" placeholder="Password" class="input-password">
            <p class="login_errors">{{ $errors->first('password') }}</p>
            <label for="checkbox">Remember me</label>
            <input type="checkbox" name="remember_me">
        </section>
        <p><span><a href="forgot-password">Forgot your password?</a></span></p><br>
        <input type="submit" value="login" id="submit2">
    </form>
    <a href="{{ route('register') }}">Don't have an account yet? Register here!</a>

@endsection


{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection
