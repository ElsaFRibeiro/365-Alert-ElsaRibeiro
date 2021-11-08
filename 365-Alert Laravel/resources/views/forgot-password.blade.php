{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Forgot Password')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/forgot-password.css') }}">
@endsection

<body>

    <main>

        {{-- Main Content Section --}}
        @section('content')
            <img src="{{ URL::asset('../css/logos/house.svg') }}" alt="" class="icon_365">
            <h3>Forgot password</h3>

            <form action="{{ route('password.email') }}" method="post" id="PassForget">
                {!! csrf_field() !!}
                @if (count($errors) > 0)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <input id="reset_email" type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                    class="input-email" onfocus="this.placeholder=''" onblur="this.placeholder='email'"><br>

    <input type="submit" value="Send" id="submit2">

            @endsection

            {{-- Footer Section --}}
            @section('footer')


            @endsection

            {{-- Scripts links --}}
            @section('scripts')
        </main>
    </body>
@endsection
