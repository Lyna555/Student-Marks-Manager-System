<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            margin: 0;
            color: black;
            font-weight: bold;
        }

        .button {
            padding: 3px 10px;
            border-radius: 5px;
            font-size: 18px;
        }

        #login {
            background-color: white;
        }

        #login:hover {
            box-shadow: 2px 2px 4px rgb(150,150,150);
        }

        #register {
            background-color: #AFEEEE;
        }

        #register:hover {
            box-shadow: 2px 2px 4px rgb(150,150,150);
        }

        a {
            text-decoration: none;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 94vh;
            width: 100%;
        }


        h1 {
            font-size: 50px;
            text-align: center;
        }

        p {
            text-align: center;
        }

        .cont {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .contt{
            width: 98%;
            display: flex;
            align-items: center;
            height: 6vh;
            justify-content: space-between;
        }

        #logo{
            font-size: 25px;
        }
    </style>
</head>

<body class="antialiased">
    <div>
        <div class="cont">
            @if (Route::has('login'))
            <div class="cont">
                <div class="contt">
                    <div id="logo">Logo</div>
                    <div>
                        @auth
                        <a href="{{ url('/dashboard') }}" class="button" id="dash">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="button" id="login">Login</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="button" id="register">Register</a>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
            @endif
        </div>

        <div class="container">
            <img src="{{asset('images/mark.jpg')}}" alt="mark">
            <div>
                <h1>Bienvenu!</h1>
                <p>
                    Vous voulez gerer vos notes d'examen facillement? <br>
                    Vous etes au bon endroit!
                </p>
            </div>
        </div>


    </div>
</body>

</html>