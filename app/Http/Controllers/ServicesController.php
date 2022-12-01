<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $services=Service::latest()->get();
            
            
            return view('services.index')->with('services',$services);
            
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      try {

       $service=$request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        if($request->hasFile('icon')){
            $service['icon']=$request->file('icon')->store('serviceIcon','public');
        }
        Service::create($service);
         return redirect('services');
          }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          try {

             $service=Service::find($id);
             
            return view('services.edit')->with('service',$service);
            
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $service=Service::find($id);
       $serviceToUpdate=$request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);

        if($request->hasFile('icon')){
            $serviceToUpdate['icon']=$request->file('icon')->store('serviceIcon','public');
        }
        $service->update($serviceToUpdate);
         return redirect('services');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         try {

             $service=Service::find($id);
             $service->delete();
            
            return redirect('services');
            
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
       
    }
    
    }

