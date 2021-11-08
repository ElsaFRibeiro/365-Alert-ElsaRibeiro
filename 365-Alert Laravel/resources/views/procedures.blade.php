{{-- Extending the template --}}
@extends('layouts.mytemplate')

{{-- Setting the Page title --}}
@section('title', 'Procedures')

{{-- CSS Link --}}
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/procedures.css'); }}">
@endsection

{{-- Main Content Section --}}
@section('content')

    <section class="emergency">
        <div id="emergency">
            <img src="{{URL::asset('pictures/Emergency.jpg')}}" alt="">
        </div>
    </section>

    <section class="danger">
        <div id="danger">
            <h2>Danger levels</h2>
            <br>
            <p>Permanent provision of measured water levels
                and forecasts of watercourses in Luxembourg,
                as well as additional information during flood
                warning times.</p>
        </div>

        <article class="danger_levels_container">
            <div class="icon-block icon-alert-red">
                <h3>Extreme d   anger</h3>
                <br>
                <p>The flood prediction center is in alert
                    status. Flood reports are updated at
                    least once a day or in case of a change
                    of situation. Water levels are updated
                    up to every 15 minutes.</p>
            </div>
            <div class="icon-block icon-alert-orange">
                <h3>Danger</h3>
                <br>
                <p>The flood prediction center is in prealert status. Information about flooding
                    is made available and updated if there
                    is a change of situation. Water levels
                    are updated up to every 15 minutes.</p>
            </div>
            <div class="icon-block icon-alert-yellow">
                <h3>Potential Danger</h3>
                <br>
                <p>The flood prediction center is on
                    standby. The provision of flood reports
                    is not activated. Water levels are
                    updated up to every 15 minutes.</p>
            </div>
            <div class="icon-block icon-alert-green">
                <h3>No Danger</h3>
                <br>
                <p>The provision of flood reports is not
                    activated.</p>
            </div>
        </article>
    </section>

    <section class="safety">
        <div id="safety">
            <h2>Safety Procedures <br>
                <span>What should I do in the event of a flooding?</span>
            </h2>
            <h3>Local Flooding</h3>
        </div>

        <div class="icon-danger-level1">
            <h3>Danger-Level 1</h3>
            <br>
            <h4>Possible effects</h4>
            <br>
            <p>
                <span>&#8722;</span>Local floods that could affect individual
                sectors of the economy;<br>
                <span>&#8722;</span>Local brooks' embankments, especially in
                small catchment areas;<br>
                <span>&#8722;</span>Possible floods in the usual floodplains;<br>
                <span>&#8722;</span>Difficult traffic conditions.
            </p>

            <br>
            <br>
            <h4>Behavioral recommendations</h4>
            <br>
            <p>
                <span>&#8722;</span> Make sure that your area is affected and
                follow the current flood warnings on
                <a href="url"> www.inondations.lu</a>, <a href="url">www.meteolux.lu</a>, on
                the radio or on TV. <br>
                <span>&#8722;</span>Charge your cell phone and (if available) a
                "power bank" so that in an emergency you
                can recharge the cell phone even without
                power access. <br>
            </p>
            <br>
            <br>
            <h4>In flood prone areas </h4>
            <br>
            <p>
                <span>&#8722;</span> Turn off the electricity in all rooms that are at
                risk from flooding.<br>
                <span>&#8722;</span> Turn off your heating. In addition, you should
                interrupt the gas or oil supply. Make sure your
                oil tank is adequately secured.<br>
                <span>&#8722;</span> Pack up all important personal documents
                and records and store them outside the
                danger zone. You should also have a sleeping
                bag, rubber boots and a flashlight ready.
                Please don't forget your medication either.<br>
                <span>&#8722;</span> Charge your cell phone and (if available) a
                "power bank" so that in an emergency you
                can recharge the cell phone even without
                power access.<br>
                <span>&#8722;</span> Get your car out of harm's way.<br>
                <span>&#8722;</span> Store substances that are hazardous to
                health and the environment outside of the
                flood hazard area.<br>
                <span>&#8722;</span> Read the flood protection plan for your
                building (if any) carefully.<br>
            </p>
            <br>
            <br>

            <div id="local-flooding">
                <h3>Extensive flooding</h3>
            </div>

            <div class="icon-danger-level2">
                <h3>Extreme Danger-Level 2</h3>
                <br>
                <h4>Possible effects</h4>
                <br>
                <p>
                    <span>&#8722;</span> Widespread flooding that could affect
                    individual sectors of the economy over a
                    longer period of time.<br>
                    <span>&#8722;</span> Large-scale flooding, including in areas that
                    are rarely flooded.<br>
                    <span>&#8722;</span> Difficult road traffic conditions.<br>
                    <span>&#8722;</span> Danger of sewer networks overflowing.
                </p>

                <br>
                <br>
                <h4>Behavioral recommendations</h4>
                <br>
                <p>
                    <span>&#8722;</span> If possible, stay at home and keep up to date with the latest flood warnings on <a href="url"> www.inondations.lu</a>, <a href="url">www.meteolux.lu</a>, on
                    the radio or on TV. <br>
                    <span>&#8722;</span> Avoid any unnecessary stay in the affected
                    region.<br>
                    <span>&#8722;</span> If necessary, share your travel intentions with
                    your relatives and be careful.<br>
                </p>
                <br>
                <br>
                <h4>In flood prone areas </h4>
                <br>
                <p>
                    <span>&#8722;</span> Follow detours and watch out for blocked
                    roads.<br>
                    <span>&#8722;</span> Never drive on flooded roads.<br>
                    <span>&#8722;</span> Make sure you have followed the Orange -
                    Warning Level recommendations.<br>
                    <span>&#8722;</span> If the power fails or is switched off, use
                    battery-operated devices such as your
                    smartphone or a battery-operated radio.<br>
                    <span>&#8722;</span> If there is a risk of flooding, do not go into the
                    basement or the underground car park.<br>
                    <span>&#8722;</span> Follow the instructions of the fire brigade and
                    the on-site helpers, have yourself evacuated
                    in good time so that you and the helpers do
                    not put yourself and the helpers in danger if
                    the flood situation suddenly worsens.<br>
                    <span>&#8722;</span> Remain calm and act carefully. Rescuing
                    human beings takes precedence over the
                    preservation of property.<br>
                    <span>&#8722;</span> Avoid bank areas and flooded streets and pay
                    attention to barriers.<br>
                    <span>&#8722;</span> Do not take a boat trip without taking all
                    necessary precautions.<br>
                    <span>&#8722;</span> Please note that the fire brigade does not use
                    or provide pumps in flooded rooms during the
                    flood. Pumping out during the flood could
                    lead to different pressure ratios and damage
                    walls.<br>
                </p>
                <br>
                <br>
                
@endsection

{{-- Footer Section --}}
@section('footer')

@endsection

{{-- Scripts links --}}
@section('scripts')

@endsection