<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         try {

            $about=About::latest()->first();
            
            return view('about.index')->with('about',$about);
            
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

             $about=About::find($id);
             
            return view('about.edit')->with('about',$about);
            
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
       $about=About::find($id);
       $aboutToUpdate=$request->validate([
        'heading'=>'required',
            'who_we_are'=>'required',
            'vision'=>'required',
            'mission'=>'required',
       ]);
         if($request->hasFile('photo')){
            $aboutToUpdate['photo']=$request->file('photo')->store('aboutPhoto','public');
        }
        $about->update($aboutToUpdate);
         return redirect('about');
       
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

             $about=About::find($id);
             $about->delete();
            
            return redirect('about');
            
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
       
    }
    
}
