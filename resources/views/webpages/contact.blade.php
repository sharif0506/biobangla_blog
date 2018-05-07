@extends('layouts.layout')
@section('title','Contact Us')

@section('content')
<h1 class="text-center">Contact Us</h1>
<hr />
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <img class="img-responsive" src="{{asset('images/contact.PNG')}}" alt="Contact Banner" />
        </div>
        <div class="col-sm-8">
            <h4 class="text-center">
                Share Your Thought
            </h4>
            <form method="post" action="#">

                <input class="form-control" type="text" name="email_from" placeholder="Your Email Address" required  />
                <br />
                <input class="form-control" type="text" name="email_subject" placeholder="Email Subject" required  /> 
                <br />                   
                <textarea class="form-control" name="email_body" rows="5" placeholder="Your Email Body"></textarea>
                <br />
                <div class="col-sm-4 col-sm-offset-4">
                    <button class="form-control btn btn-success" type="submit" name="send_mail">Send Email</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

