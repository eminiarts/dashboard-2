@extends('layouts/master')

@section('content')

@javascript(compact('pusherKey', 'clientConnectionPath', 'environment', 'openWeatherMapKey', 'teamworkToken', 'teamworkUrl'))
<div id="dashboard">
    <dashboard class="font-sans">
        <activity position="a1:a24"></activity>
        {{-- <twitter :initial-tweets="{{ json_encode($initialTweets) }}" position="a1:a16"></twitter> --}}

        <board position="b1:b24" board="aufgaben"></board>
        <board position="c1:c24" board="in_arbeit"></board>
        <board position="d1:d24" board="wichtig"></board>
        
        {{-- <tile-timer on="16:00" off="19:00">
            <trains position="a1:a24" max-trains="3"></trains>
        </tile-timer> --}}
        <time-weather position="e1:e6" date-format="ddd DD.MM" time-zone="Europe/Zurich" weather-city="Sankt Gallen"></time-weather>
        <milestones position="e7:e24"></milestones>
        
        {{-- <team-member name="bajram" avatar="{{ gravatar('bajram@eminiarts.ch') }}" birthday="1992-05-06" position="e7:e9"></team-member>
        <team-member name="enes" avatar="{{ gravatar('enes@eminiarts.ch') }}" birthday="1996-10-11" position="e10:e12"></team-member> --}}


        {{-- <internet-connection position="e1:e6"></internet-connection> --}}
        {{-- <statistics position="d1:d10"></statistics> --}}
        {{-- <uptime position="d1:d10"></uptime> --}}
        {{-- <calendar position="e7:e16"></calendar> --}}
    </dashboard>
</div>

@endsection
