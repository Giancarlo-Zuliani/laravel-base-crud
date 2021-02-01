@extends('layouts.main-layout')

@section('content')
    <form action="{{route('update-device',$device -> id)}}" method="post">
        @csrf
        @method('post')
        <label for="name">Name : </label>
        <input type="text" name="name" placeholder="{{$device -> name}}">
        <br>
        <label for=""model>Model : </label>
        <input type="text" name="model" placeholder="{{$device -> model}}">
        <br>
        <label for="consumption">Consumption : </label>
        <input type="number" name ="consumption" placeholder="{{$device -> consumption}}">
        <br>
        <label for="price">Price : </label>
        <input type="number" name="price" placeholder="{{$device -> price}}">
         <input type="submit" value="submit" placeholder="Edit">
    @endsection