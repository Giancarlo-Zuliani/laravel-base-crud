@extends('layouts.main-layout')


@section('content')
<div>
    <a class="addbtn" href="{{route('home-devices')}}"> <i class="fas fa-arrow-alt-circle-left"></i>Back</a>
</div>


    <div class="product">
        <h2>ID : {{$device -> id}}</h2>
        <h2>{{$device -> name}}</h2>
        <h2>Model num : {{$device -> model}}</h2>
        <h2>Consumption : {{$device -> consumption}}KW</h2>
        <h2>Price : {{$device -> price}}USD</h2>
    </div>

@endsection
