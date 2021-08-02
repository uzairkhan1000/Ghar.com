<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fav_Property;
use App\Models\property;

use Auth;

class Fav_Property_Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addFavourite(property $id )
    {
       
        $data =Auth::user()->fav_properties;
        foreach($data as $property)
        {
            $favproperties[]=$property->pivot->property_id;
            
        }
        if(!empty($favproperties))
        {
        if(in_array($id->id , $favproperties))
        {
            Auth::user()->fav_properties()->detach($id);
        }
        else
        {
            Auth::user()->fav_properties()->save($id);
            
        }
        
    }
    else
        {
            Auth::user()->fav_properties()->save($id);
            
        }
        return redirect()->back();

       
    }

    public function showfavProperties()
    {
        if(Auth::user())
        {
        $data =Auth::user()->fav_properties;
        // $properties=property::query()->paginate(11);
        $properties=property::all();
        foreach($data as $property)
        {
            
            $favproperties[]=$property->pivot->property_id;
            
        }
      
        if(empty($favproperties))
        {
            $favproperties[]=0;
            return view('frontend.favorites',compact('properties','favproperties'));
        }
        else
        {
            return view('frontend.favorites',compact('properties','favproperties'));
        }
        
        
    }
    else
    {
        // $properties=property::query()->paginate(5);
        // return view('frontend.favorites',compact('properties'));
    }
    }
  
}
