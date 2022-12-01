<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         try {

            $footer=Footer::latest()->first();
            
            return view('footer.index')->with('footer',$footer);
            
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

             $footer=Footer::find($id);
             
            return view('footer.edit')->with('footer',$footer);
            
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
       $footer=Footer::find($id);
       $footerToUpdate=$request->validate([
        'tag_line'=>'required',
            'paragraph'=>'required',
           
       ]);
         
        $footer->update($footerToUpdate);
         return redirect('footer');
       
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

             $footer=Footer::find($id);
             $footer->delete();
            
            return redirect('footer');
            
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
       
    }
}
