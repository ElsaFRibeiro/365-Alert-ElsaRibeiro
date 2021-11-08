{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Alerts')

{{-- CSS Link --}}
@section('css')
    <link rel="stylesheet" href="{{ URL::asset('css/alerts.css') }}">
@endsection

{{-- Main Content Section --}}
@section('content')
<section class="flood-map">
    <h1>Luxembourg Flood Map</h1>
</section>
<section class="flex_container">
    <article class="map_image">
        <img src="{{URL::asset('pictures/Map_Vector_Blue-01.png')}}" alt="luxembourg_map">
    </article>
    <article class="map_main_container" >
        <div class="map_details_container">
            <h2>Locations</h2>
            <ol id="locations_list">
                <li>Bigonville</li>
                <li>Bissen</li>
                <li>Bollendorf</li>
                <li>Diekirch</li>
                <li>Ettelbrück</li>
                <li>Ettelbrück</li>
                <li>Hesperange</li>
                <li>Hunnebuer</li>
                <li>Mersch</li>
                <li>Pfaffenthal</li>
                <li>Reichlange</li>
                <li>Stadtbredimus</li>
                <li>Steinsel</li>
            </ol>
        </div>
        <div class="level_description">
            <h3>Levels</h3>
            <ul id="levels_list" >
                <li><div id="red_circle"></div>Extreme Danger</li>
                <li><div id="orange_circle"></div>Danger</li>
                <li><div id="yellow_circle"></div>Potential Danger</li>
                <li><div id="green_circle"></div>Low Danger</li>
                <li><div id="brown_circle"></div>Dry</li>
            </ul>
        </div>
    </article>
</section>
<h2 class="alerts_title">Alerts</h2>
<section>
    @foreach ($alerts as $alert)
    <article class="alert_container">
        @if($alert->type === 'Extreme Danger')
            <div class="extreme_danger_sidebar" id="sidebar_color"></div>
            <div class="extreme_danger_icon" id="alert_icon"></div>
        @elseif($alert->type === 'Danger')
            <div class="danger_sidebar" id="sidebar_color"></div>
            <div class="danger_icon" id="alert_icon"></div>
        @elseif($alert->type === 'Potential Danger')
            <div class="potential_danger_sidebar" id="sidebar_color"></div>
            <div class="potential_danger_icon" id="alert_icon"></div>
        @elseif($alert->type === 'Low Danger')
            <div class="low_danger_sidebar" id="sidebar_color"></div>
            <div class="low_danger_icon" id="alert_icon"></div>
        @elseif($alert->type === 'Dried Up River')
            <div class="dried_up_sidebar" id="sidebar_color"></div>
            <div class="dried_up_icon" id="alert_icon"></div>
        @endif
        <div class="alert">
            <h4 id="location">{{$alert->location}}</h4>
            <p id="alert_type">{{$alert->type}}</p>
            <p id="description">The flood alert is in {{$alert->description}} status.</p>
            <p id="river">River {{$alert->river}}</p>
            <p id="water_level">Water Level: {{$alert->water_level . " cm"}}</p>
            <p id="updated">{{$alert->updated_at}}</p>
            <div id="flex_buttons">
                <a style="text-decoration:none" href="{{ route('add-alert', ['alert_id' => $alert->id]) }}" class="buttons_container">
                    <button type="submit" id="button_hover">Add To List</button>
                </a>
                <a href="{{ route('procedures') }}" class="buttons_container"><button id="button_hover">Procedures</button></a>
            </div>
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
