<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\property;
use Auth;
class PropertyController extends Controller
{
    
    function addProperty(Request $req)
    {
        // dd($req);
      
        

        $property= new property;
        $property->user_id=Auth::user()->id;
        $property->title=$req->title;
        $property->location=$req->location;
        $property->status=$req->status;
        $property->price=$req->price;
        $property->images=$req->image;
        $property->size=$req->size;
        $property->bedrooms=$req->bedrooms;
        $property->bathrooms=$req->bathrooms;
        $property->tv_lounges=$req->tv_lounges;
        $property->garages=$req->garages;
        $property->swimming_pools=$req->swimming_pools;
        $property->description=$req->description;




        if($property->save())
        {
            return redirect()->back()->with('status',$property);
        }else
        {
            return redirect()->back()->with('error','property not added');
        }
        
    }
}
