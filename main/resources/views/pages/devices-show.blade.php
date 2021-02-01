@extends('layouts.main-layout')

@section('content')

<a href="{{Route('home-devices')}}">Back</a>


    <h2>{{$device -> id}}</h2>
    <h2>{{$device -> name}}</h2>
    <h2>{{$device -> model}}</h2>
    <h2>{{$device -> consumption}}</h2>
    <h2>{{$device -> price}}</h2>

@endsection
