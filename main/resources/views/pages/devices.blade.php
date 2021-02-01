@extends('layouts.main-layout')

@section('content')
    <h1>DEVICE</h1>
    <ul>
         @foreach($devices as $device)

         <li>
            <a href="{{-- {{route('device-show' , $device -> id)}} --}} "> {{$device -> name}} </a>
         </li>

         @endforeach
    </ul>
    @endsection


