@extends('layouts.layout')
@section('title','Our Partnars')

@section('content')

<div id="partnarship" class="container-fluid">
    <h2 class="text-center">Our Partnars</h2>
    <hr />
    <div class="row">
        <div class="col-sm-6">
            <img src="{{asset('images/partnar1.jpg')}}" class="partnarImg img-responsive text-center" alt="partnar1" style="max-height: 300px; margin: auto;" />
            <h4 class="text-center">Chinese University of Hong Kong</h4>
            <p class="text-muted text-center" style="margin-bottom: 20px"> Chinese University of Hong Kong iGEM team 2017</p>
        </div>
        <div class="col-sm-6">
            <div >
                <img src="{{asset('images/partnar2.png')}}" class="partnarImg img-responsive text-center" alt="partnar2" style="max-height: 300px; margin: 0 auto;" />
                <h4 class="text-center">Bio Bio One</h4>
                <p class="text-muted text-center" style="margin-bottom: 20px" >Research Foundation</p>
            </div>
        </div>
    </div>
</div>
<br /><br /><br />
@endsection

