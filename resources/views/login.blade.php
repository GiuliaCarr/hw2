<html>

<head>
    <title> Login - TeyvApp</title>
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
    <script src="{{ url('js/login.js') }}" defer="true"></script>
    <link rel="shortcut icon" href="images/teyvapp.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Konkhmer+Sleokchher&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>


    <main>

        <form name='login_form' method='post'>
            @csrf
            <img id="logo" src="images/teyvapp.png">
            <a id="signIn"> Sign in to TeyvApp</a>

            <div class="username">
                <label>Username <br><input type='text' name='username' value='{{ old('username') }}'>
                    <div id="username" class="hidden"> <img src="images/error.png" />
                        <span>Write your username.</span>
                    </div>
                </label>

            </div>
            <div class="password">
                <label>Password <br><input type='password' name='password'>
                    <div id="password" class="hidden"> <img src="images/error.png"/>
                        <span> Write your password.</span>
                    </div>
                </label>

            </div>
            @foreach ($errors->all() as $err)
                <p class='error'>{{ $err }}</p>
            @endforeach
            <div id="enter">
                <label>&nbsp;<input type='submit' value='Log In'></label>
            </div>
            <span>Do not have an account?</span><a id="sign"href="{{ url('register') }}">Sign up</a>
        </form>
    </main>
</body>

</html>
