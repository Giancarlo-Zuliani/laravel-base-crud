<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
     public function destroy($id){
        Device::destroy($id);
        return redirect() -> route('home-devices');
    }

    public function edit($id){
        $device = Device::find($id);
  
        return view('pages.devices-edit',compact('device'));
    }
    public function update(Request $request,$id){
        $data = $request->except('_method','_token','device');

      $validator = Validator::make($request->all(), [
         'name' => 'required|string|min:3',
         'model' => 'required|string|min:3',
         'consumption' =>'required|integer',
         'price' => 'required|numeric'
      ]);

      if ($validator->fails()) {
         return redirect()->Back()->withInput()->withErrors($validator);
      }
      $subject = Device::find($id);
      $data['price'] = $data['price'] * 100;
      if($subject->update($data)){
          
          Session::flash('message', 'Update successfully!');
          Session::flash('alert-class', 'alert-success');
          return redirect()->route('home-devices');
        }else{
            Session::flash('message', 'Data not updated!');
            Session::flash('alert-class', 'alert-danger');
        }
        
        dd($subject-> price);
      return Back()->withInput();
   }
    
}