{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Admin')

{{-- CSS Link --}}
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/admin.css') }}">
@endsection

{{-- Main Content Section --}}
@section('content')
    <h1 id="section-title">Users</h1>
    <section id="users-list">
        @foreach ($users as $user)

        <article id="user-article">    
            <div id="user-details">
                <p class="label">First Name</p>
                <p class="user-data">{{ $user->firstname }}</p>
                <p class="label">Last Name</p>
                <p class="user-data">{{ $user->lastname}}</p>
                <p class="label">Email</p>
                <p class="user-data">{{ $user->email }}</p>
                {{-- <p class="label">Password</p>
                <p class="user-data">{{ $user->password }}</p> --}}
                <p class="label">Phone Number</p>
                <p class="user-data">{{ $user->contact }}</p>
            </div>
            <div id="buttons_cont">
                <a href="{{ route('edit-user', ['id' => $user->id]) }}" class="buttons_container">
                    <button class="buttons_container" type="submit">Edit User</button>
                </a><br>
                <a href="{{ route('delete-user', ['id' => $user->id]) }}" class="buttons_container">
                    <button class="buttons_container" type="submit">Delete User</button>
                </a>
            </div>
        </article>
        @endforeach
    </section>
    <h2 id="alerts-title">Alerts Settings</h2>
    <section id="alerts-list">
        @foreach ($alerts as $alert)

        <article class="alert_container">
            <div class="extreme_danger_sidebar" id="sidebar_color"></div>
            <div class="extreme_danger_icon" id="alert_icon"></div>
            <div class="alert">
                <h4 id="location">{{$alert->location}}</h4>
                <p id="river">River {{$alert->river}}</p>
                <p id="water_level">Water Level: {{$alert->water_level . " cm"}}</p>
                <p id="water_level">Water Caution Level: {{$alert->water_caution_level . " cm"}}</p>
                <p id="water_level">Water Pre-Alert Level: {{$alert->water_prealert_level . " cm"}}</p>
                <p id="water_level">Water Alert Level: {{$alert->water_alert_level . " cm"}}</p>
                <p id="updated">{{$alert->updated_at}}</p>
                <a href="{{ route('alert-edit', ['id' => $alert->id]) }}" class="buttons_container">
                    <button class="buttons_container" type="submit">Edit Alert Settings</button>
                </a>
            </div>
        </article>

        @endforeach
    </section>

@endsection

{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection
