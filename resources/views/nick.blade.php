<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JKSousa</title>
    <link rel="stylesheet" href="{{URL::to("css/dashboard.css")}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::to("css/cube.css")}}">

    @yield('styles')
    <style>
        body {
            background: #555555;
        }

        .perfect-centering {
            position: absolute;
            text-align: center;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }


    </style>
</head>
<body>

<div class="container perfect-centering ">


    <div class="wrap">
        <div class="row">
            <div class="cube">
                <div class="face">
                    {{--image face--}}
                    <div class="cube-image">
                        <img src="/images/nick/nick.png" width=200 height=200 alt="">

                    </div>
                </div>
                <div class="face" >
                    <div class="cube-image" style="background-color: #800020; text-shadow: 2px 2px #000000; color: #eeeeee;">
                        <div class="perfect-centering"><strong>ntsousa7&#64;gmail.com</strong></div>
                    </div>
                </div>
                <div class="face">
                    <div class="cube-image">
                        <div class="perfect-centering">
                            <a href="https://www.instagram.com/jeffsousayoga/">
                                <img src="/images/nick/running-256.png" width=100 height=100 alt="Instagram">
                            </a>
                        </div>

                    </div>
                </div>
                <div class="face">
                    <div class="cube-image">
                        <div class="perfect-centering">
                            <a href="https://www.linkedin.com/in/jeff-sousa-83b06425">
                                <img src="/images/nick/football-2-256.png" width=100 height=100 alt="LinkedIn">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="face">
                    <div class="cube-image">

                        <div class="perfect-centering">
                            <a href="https://www.facebook.com/jksousa">
                                <img src="/images/nick/sport-256.png" width=100 height=100 alt="Facebook">
                            </a>
                        </div>


                    </div>
                </div>
                <div class="face">
                    <div class="cube-image">

                        <div class="perfect-centering">
                            <a href="https://www.jeffsousayoga.com/">
                                <img src="/images/nick/tennis-256.png" width=100 height=100 alt="Yoga">
                            </a>
                        </div>

                    </div>
                </div>

            </div>

        </div>


    </div>
    <script src="{{URL::to("js/cube-interactive.js")}}"></script>


    <script src="https://use.fontawesome.com/704bb61c39.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
            integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
            crossorigin="anonymous"></script>
@yield('scripts')

</body>
</html>