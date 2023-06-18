@extends('layout')

@section('head')
    <title>TeyvApp - Twitch</title>
    <script src="{{ url('js/twitch.js') }}" defer="true"></script>
    <script>
        const STREAM_URL = "{{ url('/') }}/";
        const FAV_URL = "{{ url('/') }}/";
        const CSRF_TOKEN = '{{ csrf_token() }}';
        const SAVE_STREAM_URL = "{{ url('/') }}/";
        const DELETE_URL = "{{ url('/') }}/"    
    </script>
    <link rel="stylesheet" href="{{ url('css/twitch.css') }}">
@endsection


@section('title')
    <h1 id="Titolo">GAMING ZONE</h1>
@endsection
@section('content')
    <div id="break"><span> Discover new streamers every day! <br> Save your favorite streamers!</span></div>

    <div id="divide"></div>
    <section id="results"></section>
@endsection
