<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/teyvapp.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('css/common.css') }}">
    <script src='{{ url('js/common.js') }}' defer="true"></script>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Fjalla+One&family=Lobster&display=swap"
        rel="stylesheet">

    @section('head')
    @show
</head>

<body>

    <div id="minimenu" class="offmenu">

        <img id="esc" src="images/esc.png">

        <a class="char" href="{{ url('characters') }}" class="Button">CHARACTERS</a>
        <a class="vis" href="{{ url('visions') }}" class="Button">VISIONS</a>
        <a class="tw" href="{{ url('twitch') }}" class="Button">GAMING ZONE</a>
        <a class="profile" href="{{ url('profile') }}" class="Button">MY PROFILE</a>
        <a class="about" href="{{ url('about') }}" class="Button">ABOUT US</a>
        <a class="log" href="{{ url('logout') }}">LOG OUT</a>

    </div>


    <header>
        <div id="Overlay"> </div>
        <div id="nome">
            <img id="logo" src="images/teyvapp.png">
            <a id="home" href="{{ url('home')}}">TeyvApp</a>
        </div>
        <nav>

            <div id="options">
                <a class="char" href="{{ url('characters') }}" class="Button">CHARACTERS</a>
                <a class="vis" href="{{ url('visions') }}" class="Button">VISIONS</a>
                <a class="tw" href="{{ url('twitch') }}" class="Button">GAMING ZONE</a>
                <a class="profile" href="{{ url('profile') }}" class="Button">MY PROFILE</a>
                <a class="about" href="{{ url('about') }}" class="Button">ABOUT US</a>
                <a href="{{ url('logout') }}" class="log">LOG OUT</a>
            </div>

        </nav>

        <div id="laterale">

            <img id="menu" src="images/sidebar.png">

        </div>
        @section('title')
        @show


    </header>
    @section('content')
    @show

</body>

</html>
