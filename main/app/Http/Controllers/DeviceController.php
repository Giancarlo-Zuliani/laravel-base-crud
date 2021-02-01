<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;

class DeviceController extends Controller
{
    public function index(){
        $devices = Device::all();
        return view('pages.devices' , compact('devices'));
    }

    public function show($id){
     
        $device = Device::findOrFail($id);
         return view('pages.devices-show' , compact('device'));
    }
    public function create(){
        
        return view('pages.devices-create');
    }
    public function store(Request $request){
        Device::create($request -> all());
        return redirect() -> route('home-devices');
    }
}
