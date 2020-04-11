<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Freestyle</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,600" rel="stylesheet">

        <link rel="icon" type="image/png" href="{{url('/images/logo.png')}}">

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="{{url('/js/words.js')}}"></script>
        <script src="{{url('/js/app.js')}}"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                max-width: 100%;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /** temp css */
            #ide-nav
            {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                height: 30px;
                background-color: #fefefe;
            }

            #ide-nav ul
            {
                line-height: 1px;
            }

            #ide-nav li
            {
                list-style-type: none;
                float: left;
                width: auto;
                margin: auto;
                padding-left: 10px;
                padding-right: 10px;
                font-weight: 400;
            }

            #ide-text-hidden
            {
                position: absolute;
                top: 30px;
                bottom: 0;
                left: 0;
                right: 0;
                background: #212121;
                border: none;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 400;
                padding: 25px;
                font-size: 20px;
                opacity: 0;
                z-index: 998;
            }

            #ide-text
            {
                width: 100%;
                height: 100%;
                float: left;
                resize: none;
                background: #212121;
                border: none;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 400;
                font-size: 20px;
                padding: 25px;
                margin-top: 70px;
            }

            #word-helper
            {
                display: none;
                border: 1px solid #424242;
                width: 100px;
                height: auto;
                position: absolute;
                z-index: 999;
                background-color: #313131;
            }

            .word
            {
                position: relative;
                float: left;
                width: 100%;
                height: 20px;
                font-size: 15px;
                color: #fff;
            }

            .word:hover
            {
                background-color: #062f4a;
            }

            .visible
            {
                display: block !important;
            }

            .hidden
            {
                display: none !important;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div id="ide-nav">
                <ul>
                    <li>File</li>
                    <li>Edit</li>
                    <li>Selection</li>
                    <li>View</li>
                    <li>Go</li>
                    <li>Run</li>
                    <li>Terminal</li>
                    <li>Helper</li>
                </ul>
            </div>

            <div id="ide-text-hidden" contenteditable="true"></div>
            <div id="ide-text"></div>

            <!-- HELPER -->
            <div id="word-helper">
            </div>
        </div>
    </body>
</html>
