{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Reset Password')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/reset-password.css') }}">
@endsection
{{-- Main Content Section --}}
@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <img src="{{ URL::asset('../css/logos/house.svg') }}" alt="">

    <h3>Reset password</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('password.update', ['token' => $token]) }}" method="post" id="PassReset">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}"><br>
        <input id="reset_info" type="email" name="email" value="{{ old('email') }}" placeholder="email"
            class="input-email"><br>
        <input id="reset_info" type="password" name="password" placeholder="New password" class="input-password"
            onfocus="this.placeholder=''" onblur="this.placeholder='password'"><br>
        <input id="reset_info" type="password" name="password_confirmation" placeholder="Confirm password"
            class="input-password"><br>


        <input type="submit" value="Send" id="send4">
    @endsection
    {{-- Footer Section --}}
    @section('footer')


    @endsection

    {{-- Scripts links --}}
    @section('scripts')

    @endsection
