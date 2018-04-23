@extends('layouts.layout')
@section('title','home')

@section('content')
<h1>Welcome to biobangla blog</h1>
<a href="{{ url('/logout') }}" >Logout</a>
@endsection

