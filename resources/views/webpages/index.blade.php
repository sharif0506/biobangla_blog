@extends('layouts.layout')
@section('title','Welcome To BioBangla')

@section('content')

<div class="container">
    <h1 class="text-center">
        Welcome to BioBangla
    </h1>
    <p class="text-muted text-center">
        A Startup to promote community sciences 
    </p>
    <hr />
    <div class="row" style="background-color: seagreen;"> 

        <div class="col-sm-4" style="margin-top:10px;margin-bottom: 10px"> 
            <img class="img-responsive" src="{{asset('images/biobangla-logo.jpg')}}" alt="Home Banner" />
        </div>  

        <div class="col-sm-8">

            <h3 class="text-justify">
                BioBangla is a startup to promote community sciences by involving potential candidates 
                in the Biotech-projects we work on for various groups, organizations and companies and 
                promote community sciences.
            </h3> 
            <br />
            <h3 class="text-justify">
                We are determined to arrange proper support so that a portion of our large community can
                get involved into citizen sciences and build a network of effective community sciences.
            </h3> 

        </div>
    </div>
    <br />
    <div class="row">
        <p style="font-size: 18px;text-align: justify; margin-bottom: 10px">
            Right now we are working on developing collaborations with hacking spaces around the globe,
            and some of the well-reputed academic institutes as well as the progressive industries in the field.
            We are also bringing engineering fields as well as natural science bodies together under one umbrella 
            since the convergence is the main objective of the Space. We have been successful so far within our sphere
            of relevance and have high hopes in expanding it.
        </p>

        <img class="img-responsive" src="{{asset('images/home-workshop.jpg')}}" alt="Home Banner" style="width: 100%;margin-top:10px;margin-bottom: 10px" />
    </div>

    <div class="row">
        <p class="text-center" style="font-size: 18px; margin: 10px; padding: 10px; background-color: seagreen">
            SYNBIOBANGLADESH
        </p>
    </div>

    <br/><br/>
</div>

@endsection

