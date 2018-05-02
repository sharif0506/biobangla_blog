@extends('layouts.layout')
@section('title','BioBangla Team')

@section('content')
<div class="container-fluid">
    <h2 class="sectionHeading text-center">Our Team</h2>
    <hr />

    <br />
    <div class="row">
        <div class="col-sm-6">
            <div class="team-member text-center">
                <img src="{{asset('images/ceo.jpg')}}" class="img-responsive img-circle text-center" alt="founder" style="max-height: 350px; margin: auto;" />
                <h4 class="text-center">Hossain Masum</h4>
                <p class="text-muted text-center">Founder</p>
                <p class="text-muted text-center">Research Fellow at iGEM 2016 CEO and Co-Founder at Biohacking space peshawar .Co-Founder -"Science on
                    Wheels"(start up)</p>
            </div>
        </div>



        <div class="col-sm-6">
            <div class="team-member text-center">
                <img src="{{asset('images/exe.jpg')}}" class="img-responsive img-circle text-center" alt="cofounder" style="max-height: 350px; margin: auto;" />
                <h4 class="text-center">Tania Ferdousi</h4>
                <p class="text-muted text-center">Co-Founder</p>
                <p class="text-muted text-center">Senior Research assistant at emerging infections and parasitology lab at International Centre for Diarrhoeal
                    Disease Research, Bangladesh(icddr,b)</p>

            </div>
        </div>
    </div>
</div>

@endsection

