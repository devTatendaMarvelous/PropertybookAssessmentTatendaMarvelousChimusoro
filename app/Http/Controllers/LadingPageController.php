<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\About;
use App\Models\Price;
use App\Models\Footer;
use App\Models\Service;
use Illuminate\Http\Request;

class LadingPageController extends Controller
{
    public function index()
   
   {
        try {

            $prices=Price::orderBy('price','asc')->limit(3)->get();
            $about=About::latest()->first();
             $footer=Footer::latest()->first();
             $hero=Hero::latest()->first();
              $services=Service::latest()->limit(6)->get();
            
            return view('welcome')
            ->with('prices',$prices)
            ->with('about',$about)
            ->with('footer',$footer)
            ->with('hero',$hero)
            ->with('services',$services);
            
            
        }
        catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
}
