<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Shady Smaoui  - @yield('title') </title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>


</head>

<body>
    <div id="canvas-wrap">
        <canvas id="nokey" width="100%" height="1800px">Your Browser Don't Support Canvas, Please Download Chrome ^_^</canvas>
        <div id="overlay">
            <h1 style="margin-bottom:10px;">Shady Smaoui</h1>
            <h3 style="margin-top:10px; font-size:20px !important; ">Full-stack Software Developer - System Solution Architect</h3>
            <hr style="margin-top: -10px;">
            <ul class="navigation">
                <li>
                    <a href="{{route('home')}}"> Home</a>
                </li>

                <li>
                    <a href="{{route("profile")}}">Profile</a>
                </li>

                <li>
                    <a href="">Projects/partners</a>
                </li>

                <li>
                    <a href="{{route("info")}}">Website info</a>
                </li>

                <li>
                    <a href="">Contact me</a>
                </li>
            </ul>

            @yield('content')
        </div>
    </div>
</body>
<script type="text/javascript" src="{{ asset('js/animation.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/counter.js') }}"></script>
</html>