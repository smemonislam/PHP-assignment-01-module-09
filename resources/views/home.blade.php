@extends('layouts.master')

@section('title', 'Home page')

@section('content')
    
    <section id="colorlib-hero" class="js-fullheight">
        <div class="flexslider js-fullheight">
            <ul class="slides">
            <li style="background-image: url({{ asset('assets/images/img_bg_1.jpg') }});">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                            <div class="slider-text-inner js-fullheight">
                                <div class="desc">
                                    <h1>Hi! <br>I'm SM Emon Islam</h1>
                                    <h2>Laravel Developer In Bangladesh</h2>
                                        <p><a class="btn btn-primary btn-learn">Download CV <i class="icon-download4"></i></a></p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url({{ asset('assets/images/img_bg_2.jpg') }});">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-md-pull-3 col-sm-12 col-xs-12 js-fullheight slider-text">
                            <div class="slider-text-inner">
                                <div class="desc">
                                    <h1>I am <br>a SM Emon Islam</h1>
                                        <h2>Laravel Developer In Bangladesh</h2>
                                        <p><a class="btn btn-primary btn-learn">View Portfolio <i class="icon-briefcase3"></i></a></p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            </ul>
        </div>
    </section>
@endsection