{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--<meta charset="utf-8" />--}}
{{--<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">--}}
{{--<link rel="icon" type="image/png" href="/assets/img/favicon.png">--}}
{{--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />--}}

{{--<title>Landing Page - Material Kit by Creative Tim</title>--}}

{{--<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />--}}

{{--<!--     Fonts and icons     -->--}}
{{--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />--}}
{{--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />--}}
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />--}}

{{--<!-- CSS Files -->--}}
{{--<link href="/assets/css/bootstrap.min.css" rel="stylesheet" />--}}
{{--<link href="/assets/css/material-kit.css" rel="stylesheet"/>--}}

{{--</head>--}}

{{--<body class="landing-page">--}}
{{--<nav class="navbar navbar-transparent navbar-absolute">--}}
{{--<div class="container">--}}
{{--<!-- Brand and toggle get grouped for better mobile display -->--}}
{{--<div class="navbar-header">--}}
{{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">--}}
{{--<span class="sr-only">Toggle navigation</span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--<span class="icon-bar"></span>--}}
{{--</button>--}}
{{--<a class="navbar-brand" href="{{ route('home') }}">--}}
{{--<i class="fa fa-flask"></i>SandCastle--}}
{{--</a>--}}
{{--</div>--}}

{{--<div class="collapse navbar-collapse" id="navigation-example">--}}
{{--<ul class="nav navbar-nav navbar-right">--}}
{{--<li>--}}
{{--<a href="../components-documentation.html" target="_blank">--}}
{{--Components--}}
{{--</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a href="http://demos.creative-tim.com/material-kit-pro/presentation.html?ref=utp-freebie" target="_blank">--}}
{{--<i class="material-icons">unarchive</i> Upgrade to PRO--}}
{{--</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">--}}
{{--<i class="fa fa-twitter"></i>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">--}}
{{--<i class="fa fa-facebook-square"></i>--}}
{{--</a>--}}
{{--</li>--}}
{{--<li>--}}
{{--<a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-simple btn-white btn-just-icon">--}}
{{--<i class="fa fa-instagram"></i>--}}
{{--</a>--}}
{{--</li>--}}
{{--</ul>--}}
{{--</div>--}}
{{--</div>--}}
{{--</nav>--}}

@extends('layouts.master')

@section('title')
    SandCastle
@endsection

@section('styles')
    <!--     Fonts and icons     -->

@endsection

@section('content')



    <div class="wrapper">
        <div class="header header-filter"
             style="background-image: url('/images/freud/freud-carbide.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title"><img src="/images/freud/freud-logo.png" alt=""></h1>
                        <h4>Whether you are a fine woodworker or a high production cabinet shop, one thing is for
                            certain… you depend on the best, most precise cutting tools that deliver superior
                            quality finish with long cutting life. </h4>
                        <br/>
                        <a target="_blank"
                           href="https://player.vimeo.com/video/86126100?portrait=0&color=ff0000&autoplay=1"
                           class="btn btn-danger btn-raised btn-lg">
                            <i class="fa fa-play"></i> Watch video
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main main-raised">
            <div class="container">

                <div class="section text-center section-landing">
                    <div class="row">
                        <div class="col-md-2">&nbsp;</div>
                        <div class="col-md-8">
                            <h2 class="title">Let's talk product</h2>
                            <h5 class="description">At Freud, we take to heart the time, money and creativity you
                                dedicate to each woodworking project. That is why our philosophy is to consistently
                                strive for perfection in cutting tool performance. Freud meticulously analyzes every
                                detail of the woodworker’s needs and requirements; enabling us to design and produce
                                superior tailored solutions. </h5>
                        </div>
                        <div class="col-md-2">&nbsp;</div>
                    </div>


                    <div class="features">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-primary">
                                        <img width=170 src="/images/freud/im4.jpg" alt="Thumbnail Image"
                                             class="img-raised img-circle">
                                    </div>
                                    <h4 class="info-title">Quality</h4>
                                    <p>At Freud, we take to heart the time, money and creativity you dedicate to each
                                        woodworking project. That is why our philosophy is to consistently strive for
                                        perfection in cutting tool performance.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-success">
                                        <img width=170 src="/images/freud/im5.jpg" alt="Thumbnail Image"
                                             class="img-raised img-circle">
                                    </div>
                                    <h4 class="info-title">Precision</h4>
                                    <p>Freud meticulously analyzes every detail of the woodworker’s needs and
                                        requirements; enabling us to design and produce superior tailored solutions. The
                                        level of precision that goes into each cutting tool is unprecedented in the
                                        industry.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="info">
                                    <div class="icon icon-danger">
                                        <img width=170 src="/images/freud/im6.jpg" alt="Thumbnail Image"
                                             class="img-raised img-circle">
                                    </div>
                                    <h4 class="info-title">Reputation</h4>
                                    <p>Every product is specifically designed for superior performance and maximum life.
                                        Just like you take pride in your projects, we take pride in our product so you
                                        receive the best cutting performance every time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section text-center">
                    <h2 class="title">Featured Products</h2>

                    <div class="team">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="/images/freud/im1.jpg" alt="Thumbnail Image"
                                         class="img-raised img-circle">
                                    <h4 class="title">10" NEXT GENERATION PREMIER FUSION GENERAL PURPOSE BLADE<br/>
                                        <small class="text-muted">Model</small>
                                    </h4>
                                    <p class="description">Freud’s Next Generation Premier Fusion featuring the radical
                                        new Fusion Trio Tooth Design is the most technologically advanced general
                                        purpose blade on the market! Freud has designed these unique blades with a new
                                        radical tooth design called “Fusion Trio” which combines a special grind for the
                                        top, sides, and face of each tooth. .</p>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i
                                                class="fa fa-instagram"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i
                                                class="fa fa-facebook-square"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="/images/freud/im2.jpg" alt="Thumbnail Image"
                                         class="img-raised img-circle">
                                    <h4 class="title">8 PIECE CNC ROUTER BIT SIGNMAKING SET<br/>
                                        <small class="text-muted">Designer</small>
                                    </h4>
                                    <p class="description">This collection of solid carbide and carbide tipped bits is
                                        the perfect way to get into signmaking in a big way. Includes 60 and 90
                                        V-Grooove bits; tapered bits for sharp, deep grooves; up and down spiral bits
                                        for clean, fast cuts; and ball nose bits for everything else.</p>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="team-player">
                                    <img src="/images/freud/im3.jpg" alt="Thumbnail Image"
                                         class="img-raised img-circle">
                                    <h4 class="title">3/8" RADIUS<br>ROUNDING OVER BIT <br/>
                                        <small class="text-muted">Model</small>
                                    </h4>
                                    <p class="description">Use rounding over bits to soften furniture edges. For beading
                                        work, equip the bits with a Freud 62-102 bearing and 62-311 step washer.

                                    </p>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i
                                                class="fa fa-google-plus"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i
                                                class="fa fa-youtube-play"></i></a>
                                    <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i
                                                class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="section landing-section">
                    <div class="row">
                        <div class="col-md-2">&nbsp;</div>

                        <div class="col-md-8">
                            <h2 class="text-center title">Work with us</h2>
                            <h4 class="text-center description">Share your name and email adddress with us and we will
                                keep you up-to-date with the latest product innovations, how to videos and much, much
                                more... </h4>
                            <form class="contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Your Name</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Your Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary btn-raised">
                                            Sign Up
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-2">&nbsp;</div>

                    </div>

                </div>
            </div>

        </div>

        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.freudtools.com/index.php/contact">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="http://www.freudtools.com/index.php/dealer_locatorm">
                                Dealer Locator
                            </a>
                        </li>
                        <li>
                            <a href="http://www.freudtools.com/index.php/freud_club">
                                Freud Club
                            </a>
                        </li>
                        <li>
                            <a href="http://www.freudtools.com/index.php/privacy_policy">
                                Privacy
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; 2017 by Freud Tools
                </div>
            </div>
        </footer>

    </div>
@endsection

@section('scripts')


    <!--   Core JS Files   -->

@endsection
