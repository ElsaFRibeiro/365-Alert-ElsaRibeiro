{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Admin User Edit')

{{-- CSS Link --}}
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/admin-user-edit.css'); }}">
@endsection

{{-- Main Content Section --}}
@section('content')
   <form action="" method="post" class="form_container">
    @csrf
    <label for="username">First Name</label><br>
    <input type="text" name="firstname" placeholder="Username" value="{{$user->firstname}}"><br>
    <label for="username">Last Name</label><br>
    <input type="text" name="lastname" placeholder="Username" value="{{$user->lastname}}"><br>
    <label for="email">Email</label><br>
    <input type="email" name="email" placeholder="Email" value="{{$user->email}}"><br>
    <label for="Phone Number">Phone Number</label><br>
    <input type="number" name="contact" placeholder="Phone number" value="{{$user->contact}}"><br>
    <label for="Password">Password</label><br>
    <input type="text" name="password" placeholder="Password" value="{{$user->password}}"><br>
    <input type="submit" value="Submit" id="submit_btn">
   </form>
@endsection

{{-- Footer Section --}}
@section('footer')
    
@endsection

{{-- Scripts links --}}
@section('scripts')
    
@endsection
