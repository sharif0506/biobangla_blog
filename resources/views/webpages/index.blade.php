@extends('layouts.layout')
@section('title','Welcome To BioBangla')

@section('content')
<h1>Welcome to biobangla blog</h1>
<p>This is home page</p>
<a href="{{ url('/logout') }}" >Logout</a>
@endsection

