@extends('layout')

@section('head')
    <title> TeyvApp - About us</title>
    <link rel='stylesheet' href="{{ url('css/about.css')}}">

@endsection

@section('title')

        <div id="title"></div>
        <img class="logo" src="images/teyvapp.png">
        <h1 id="Titolo">About us</h1>
@endsection

@section('content')
    <section>


        <section id="description">
            <p> Welcome to TeyvApp, your go-to destination for all the things of Genshin Impact!</p><br>
            <p>We are a small but dedicated website
                created by passionate fans of this captivating open-world RPG.</p> <br>
            <p>Our mission is to provide a user-friendly platform
                where you can find general information about the game's characters and create a personalized experience
                through
                a registered account.</p> <br>

            <p>At TeyvApp, the characters in Genshin Impact are at the heart of the adventure.</p> <br>
            <p>That's why we've
                compiled comprehensive profiles of each character, complete with detailed descriptions (birthday
                included!),
                info
                about their weapons and the visions they own.</p> <br>


            <p>Our user-friendly interface allows you to easily navigate through the character profiles, get info about
                how
                visions
                work and elemental reactions too.</p><br>
            <p> We strive to ensure that the information we provide is accurate and
                up-to-date, so
                you can make informed decisions about team composition, synergy, and strategy.
            </p><br>
            <p>To enhance your experience even further, we offer the option to create a registered account on TeyvApp.
                By
                registering, you gain access to additional features and benefits.</p> <br>


            <p> We welcome your feedback and suggestions as we strive to improve and grow our website
                to
                better serve the Genshin Impact community.</p><br>

            <span>Thank you for choosing TeyvApp as your companion on your journey through the enchanting realm of
                Teyvat.</span> <br>

            <span id="outro"> Web Programming Course - 2023 </span>
        </section>

    </section>

    <footer> <img class="social" src="images/twitter.png"><img class="social" src="images/yt.png"><img class="social"
            src="images/fb.png"> <img class="social" src="images/insta.png"> <span>Follow us!</span> <img
            src="images/copyright.png">Founded by GC Company </footer>
@endsection