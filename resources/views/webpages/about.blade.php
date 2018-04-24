@extends('layouts.layout')
@section('title','About BioBangla')

@section('content')
<h1>Welcome to biobangla blog</h1>
<p>This is about page</p>
<a href="{{ url('/logout') }}" >Logout</a>
@endsection

