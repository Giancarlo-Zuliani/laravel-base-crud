@extends('layouts.main-layout')

@section('content')
    <h1>DEVICE</h1>
    <ul>
       <a href="{{route('create-device')}}">Create new device</a>
        
       @foreach($devices as $device)


         <li>
            <a href="{{route('show-device' , $device -> id)}} "> {{$device -> name}} </a>
         </li>

      @endforeach
    </ul>
    @endsection


