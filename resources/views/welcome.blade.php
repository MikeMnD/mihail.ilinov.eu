<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mihail Ilinov</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">

                <div class="title m-b-md" title="Personal website of Mihail Ilinov -  Software Developer / Music Producer ">
                    Mihail Ilinov
                </div>

                <h2>Ways to contact me:</h2>
                <h4>mail: <a href="mailto:mihail@ilinov.eu" title="If you're a bot, please don't spam me!">mihail@ilinov.eu</a></h4>
                <h4>Phone: <a href="tel:+359887837569">+359 887 83 75 69</a></h4>

                <h4>facebook: <a href="http://www.facebook.com/mihail.ilinov" target="_blank" title="Check my wall...another brick in the wall!">mihail.ilinov</a></h4>
                <h4>google+: <a href="https://plus.google.com/116549256557288537186/about" target="_blank" title="Circle, circle dot dot...!">mihail.ilinov</a></h4>
                <h4>linkedIn: <a href="https://www.linkedin.com/in/mihail-ilinov-4bb8b023" target="_blank" title="If you're a bot, please don't spam me!">Mihail Ilinov</a></h4>
                <h4>twitter: <a href="http://twitter.com/#!/MikeMnd" target="_blank" title="Follow me on twitter!">MikeMnD</a></h4>
                <h4>GitHUB: <a href="https://github.com/MikeMnD" target="_blank" title="Social coding is more than cool!">Me at GitHub</a></h4>

                <h3>My own projects:</h3>
                <div class="sitesHolder">
                    <ul class="halfwidth">
                        <li><a href="http://adelinapiano.com" target="_blank" title="Пиано уроци">adelinapiano.com</a></li>
                        <li><a href="http://www.mig7studio.com" target="_blank" title="Звукозаписно студио и репетиционна">www.mig7studio.com</a></li>
                        <li><a href="http://www.sdc-bg.com" target="_blank" title="Сайт за манга на български език">sdc-bg.com</a></li>
                        <li><a href="http://www.html5piano.ilinov.eu" target="_blank" title="Пиано създадено с HTML5">html5piano.ilinov.eu</a></li>
                    </ul>
                </div>
                <div style="clear: both;"></div>

                <h3>My work at Calipers</h3>
                <h4>Check latest projects from <a href="http://www.calipers.bg/bg/%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B8/" target="_blank" title="Calipers - Interactive Agency">www.calipers.bg</a></h4>

                <div class="links">
                    <a href="https://laravel.com/docs">Bio and skills</a>
                    <a href="https://laracasts.com">Portfolio</a>
                    <a href="https://laravel-news.com">Music</a>
                    <a href="https://forge.laravel.com">Friends</a>
                </div>

            </div>
        </div>
    </body>
</html>
