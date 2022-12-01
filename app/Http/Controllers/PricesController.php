<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PricesController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {

            $prices=Price::latest()->orderBy('created_at','desc')->get();
            
            
            return view('prices.index')->with('prices',$prices);
            
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
       return view('prices.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $pricing=$request->validate(
        [
             'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'feature1'=>'required',
            'feature2'=>'required',
            'feature3'=>'required',
            'feature4'=>'required',
        ]
       );

       Price::create($pricing);
       return redirect('prices');
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

             $price=Price::find($id);
             
            return view('prices.edit')->with('price',$price);
            
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
        $toUpdate=Price::find($id);
        $pricing=$request->validate(
        [
             'title'=>'required',
            'description'=>'required',
            'price'=>'required',
            'feature1'=>'required',
            'feature2'=>'required',
            'feature3'=>'required',
            'feature4'=>'required',
        ]
       );

       $toUpdate->update($pricing);
       return redirect('prices');
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

             $price=Price::find($id);
             $price->delete();
            
            return redirect('prices');
            
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
       
    }
}
