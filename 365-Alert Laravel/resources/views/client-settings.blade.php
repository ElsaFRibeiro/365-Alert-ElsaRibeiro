{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Client Settings')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/client-settings.css') }}">
@endsection
{{-- Main Content Section --}}
@section('content')
    <main>
        <section class="intro_container">
            <img src="{{ URL::asset('../css/logos/User_WhiteStroke_Circle.svg') }}" alt="" id="image_user">
            <h1 id="client">My Account</h1>
        </section>
        <section id="logout-container">
            <a href="{{ route('logout') }}"><button>Logout</button></a>
        </section>
        <section id="settings-bar">
            <h2>Personal Details</h2>
        </section>
        <section id="user-details">
            <div class="user-username">
                <h2>First name</h2>
                <p>{{ $user->firstname }}</p>
            </div>
            <div class="user-username">
                <h2>Last name</h2>
                <p>{{ $user->lastname }}</p>
            </div>
            <div class="user-email">
                <h2>Email</h2>
                <p>{{ $user->email }}</p>
            </div>
            <div class="user-phone">
                <h2>Phone</h2>
                <p>{{ $user->contact }}</p>
            </div>
            <div id="change-buttons">
                <a href="{{ route('client-settings-edit', ['id' => $user->id]) }}" class="buttons_container">
                    <button class="buttons_container" type="submit">Edit account details</button>
                </a>
            </div>
        </section>

        <section id="settings-bar">
            <h2>Alert Notifications</h2>
        </section>
        <section class="container_alert">
            @foreach ($alerts as $alert)
                @foreach ($alert as $a)
                    <article class="alert_container">
                        <div class="alert">
                            <h4 id="location">{{ $a->location }}</h4>
                            <p id="river">River {{ $a->river }}</p>
                            <a href="{{ route('removealert', ['id' => $a->id]) }}">
                                <button class="buttons_container" type="submit">Delete Alert</button>
                            </a>
                        </div>
                    </article>
        </section>
        @endforeach
        @endforeach

        <section id="unsub_container">
            <h3>Unsubscribe</h3>
            <p>Remove the alerts from my favorites.</p>
            <a href="{{ route('unsubscribe') }}"><button>Delete alerts</button></a>
            <p>You want to delete your account?</p>
            <a href="{{ route('delete-account') }}"><button>Delete account</button></a>
        </section>
    </main>
@endsection
