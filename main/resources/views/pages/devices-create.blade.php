@extends('layouts.main-layout')

@section('content')
    <form action="{{route('store-device')}}" method="post">
        @csrf
        @method('post')
        <label for="name">Name : </label>
        <input type="text" name="name" placeholder="name">
        <br>
        <label for=""model>Model : </label>
        <input type="text" name="model" placeholder="model">
        <br>
        <label for="consumption">Consumption : </label>
        <input type="number" name ="consumption" placeholder="consumption">
        <br>
        <label for="price">Price : </label>
        <input type="number" name="price">
         <input type="submit" value="submit" placeholder="submit">
    @endsection