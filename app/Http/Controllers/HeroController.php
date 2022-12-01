<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        try {

            $hero=Hero::latest()->first();
            
            return view('hero.index')->with('hero',$hero);
            
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

             $hero=Hero::find($id);
             
            return view('hero.edit')->with('hero',$hero);
            
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
          try {

        $hero=Hero::find($id);
        $heroToUpdate=$request->validate([
            'heading'=>['required','string'],
            'paragraph'=>'required',
        ]);
         if($request->hasFile('photo')){
            $heroToUpdate['photo']=$request->file('photo')->store('heroPhoto','public');
        }
         $hero->update($heroToUpdate);
         return redirect('hero');
            
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }

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

             $hero=Hero::find($id);
             $hero->delete();
            
            return redirect('hero');
            
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
       
    }
}
