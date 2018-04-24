@extends('layouts.layout')
@section('title','BioBangla Team')

@section('content')
<h1>Welcome to biobangla blog</h1>
<p>This is team page</p>
<a href="{{ url('/logout') }}" >Logout</a>
@endsection

