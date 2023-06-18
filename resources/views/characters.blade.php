@extends('layout')

@section('head')
    <title> TeyvApp - Characters </title>
    <script src='{{ url('js/char.js') }}' defer="true"></script>
    <script>
        const FAV_URL = "{{ url('/') }}/";
        const CSRF_TOKEN = '{{ csrf_token() }}';
        const BASE_URL = "{{ url('/') }}/"
        const SAVE_URL = "{{ url('/') }}/"
        const DELETE_URL = "{{ url('/') }}/"
        const SEARCH_URL = "{{ url('/') }}/"
    </script>

    <link rel='stylesheet' href='{{ url('css/characters.css') }}'>

    <link href="https://fonts.googleapis.com/css2?family=Konkhmer+Sleokchher&display=swap" rel="stylesheet">
@endsection
@section('title')
            <h1 id="Titolo">Characters</h1>
@endsection
@section('content')
        <section id="ricerca">

            <form action="searchapigenshin.php" id="search">

                <p>
                    <label>Search<input id="searchbar" type='text' name="character">
                        <input id="sub" type='submit' value='Submit'><img id="alert"
                            src="images/alert.png"></label>
                <div id="dash"> <span class="hidden"> Tip: Try to insert dash instead of space like: Hu-Tao instead of
                        Hu
                        Tao</span></div>
                </p>


            </form>

        </section>
        <section id="results">

        </section>

        <div id="separatore"></div>

        <section id="container">

        </section>


@endsection
