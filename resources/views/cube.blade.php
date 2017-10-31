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
            background: #ccc;
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
    <div id="app-root">




        <div class="wrap" >
            <div class="row">
                <div class="cube {{ count($errors)>0 ? 'signin' : '' }}" id="cube">
                    <div class="face">
                        {{--image face--}}
                        <div class="cube-image">
                            <img src="/images/jksousa.png" width=200 height=200 alt="">

                        </div>
                    </div>
                    <div class="face">

                        <div class="cube-image" style="background-color: #e7071a">
                            <div class="perfect-centering" >
                                <app-login error="{{ count($errors) }}" token="{{ csrf_token() }}"></app-login>
                                {{--@if(count($errors)>0)--}}
                                    {{--<p>--}}
                                    {{--@foreach($errors->all() as $error)--}}
                                            {{--{{$error}}--}}
                                        {{--@endforeach--}}
                                        {{--</p>--}}
                                {{--@endif--}}
                            </div>


                        </div>
                    </div>
                    <div class="face">
                        <div class="cube-image">
                            <div class="perfect-centering">
                                <a href="https://www.instagram.com/jeffsousayoga/">
                                    <img src="/images/instagram.png" width=100 height=100 alt="Instagram">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="face">
                        <div class="cube-image">
                            <div class="perfect-centering">
                                <a href="https://www.linkedin.com/in/jeff-sousa-83b06425">
                                    <img src="/images/linkedin.png" width=100 height=100 alt="LinkedIn">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="face">
                        <div class="cube-image">

                            <div class="perfect-centering">
                                <a href="https://www.facebook.com/jksousa">
                                    <img src="/images/facebook.png" width=100 height=100 alt="Facebook">
                                </a>
                            </div>


                        </div>
                    </div>
                    <div class="face">
                        <div class="cube-image">

                            <div class="perfect-centering">
                                <a href="https://www.jeffsousayoga.com/">
                                    <img src="/images/yoga.png" width=100 height=100 alt="Yoga">
                                </a>
                            </div>

                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>

    <app-modal></app-modal>
    <script src="https://unpkg.com/vue@2.5.2/dist/vue.js"></script>
    <script src="{{URL::to("js/cube-vue.js")}}"></script>


    <script src="https://use.fontawesome.com/704bb61c39.js"></script>
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
            integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
            crossorigin="anonymous"></script>
    @if(count($errors)===0)

    <script src="{{URL::to("js/cube-interactive.js")}}"></script>
        @endif

@yield('scripts')

</body>
</html>