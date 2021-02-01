@extends('layouts.main-layout')

@section('content')

   <div>
      <h1>DEVICES</h1>
      <a class="addbtn" href="{{route('create-device')}}"><i class="fas fa-plus-square"></i>Create</a>
   </div>
   
   <ul>
        
       @foreach($devices as $device)


         <li>
            <a href="{{route('show-device' , $device -> id)}} "> {{$device -> name}} </a>
         </li>

         <a href="{{route('edit-device' , $device -> id)}}">edit</a>         
         <a href="{{route('delete-device' , $device -> id)}}">delete</a>
      @endforeach
    </ul>
    @endsection


