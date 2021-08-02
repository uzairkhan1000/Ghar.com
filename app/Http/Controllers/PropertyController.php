<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\property;
use App\Models\User;
use App\Models\Fav_Property;
use Auth;

class PropertyController extends Controller
{

    public $per_page=9 ;
    
    
    
    function addProperty(Request $req)
    {
        // dd($req);
      
        

        $property= new property;
        $property->user_id=Auth::user()->id;
        $property->title=$req->title;
        $property->location=$req->location;
        $property->status=$req->status;
        $property->price=$req->price;
        // $property->images=$req->image;
        if ($req->hasFile('image')) {
            $data = $req->input('image');
            $photo = $req->file('image')->getClientOriginalName();
            $destination = base_path() . '/public/uploads/properties';
            $req->file('image')->move($destination, $photo);
            $property->images=$photo;
            
         }
        
       
        $property->size=$req->size;
        $property->bedrooms=$req->bedrooms;
        $property->bathrooms=$req->bathrooms;
        $property->tv_lounges=$req->tv_lounges;
        $property->garages=$req->garages;
        $property->swimming_pools=$req->swimming_pools;
        $property->description=$req->description;
        
        
        // dd($req);
       
        

        if($property->save())
        {
            return redirect()->back()->with('status',$property);
        }else
        {
            return redirect()->back()->with('error','property not added');
        }
        
    }
   
    function properties(){
       
        $properties=Property::where('user_id', Auth::user()->id)->paginate(10);
        return view('frontend.myproperty',compact('properties'));
        
    }

    function delete(property $prop , $id)
    {
        property::destroy(array('id', $id));
        return redirect('myproperty');
    }

    function edit(property $prop , $id)
    {
       
       $data= property::find($id);
       return view('frontend.edit_property',['property'=>$data]);
    }

    function updateProperty(Request $req ,$id)
    {
        // dd($req);
        
        $property=property::find($id);
        $property->user_id=Auth::user()->id;
        $property->title=$req->title;
        $property->location=$req->location;
        $property->status=$req->status;
        $property->price=$req->price;
        // $property->images=$req->image;
         if ($req->hasFile("image")) {
            
            $data = $req->input('image');
            $photo = $req->file('image')->getClientOriginalName();
            $destination = base_path() . '/public/uploads/properties';
            $req->file('image')->move($destination, $photo);
            $property->images=$photo;
            // return $req;
            
         } else {
            
            
            $property->images="default.jpg";
        }
        
        
        $property->size=$req->size;
        $property->bedrooms=$req->bedrooms;
        $property->bathrooms=$req->bathrooms;
        $property->tv_lounges=$req->tv_lounges;
        $property->garages=$req->garages;
        $property->swimming_pools=$req->swimming_pools;
        $property->description=$req->description;
         
        //  dd($req);
        if($property->save())
        {
            return redirect()->back();
        } else
        {
            redirect()->back();
        }


    }

   

    public function topProperties()
    {
        if(Auth::user())
        {
        $data =Auth::user()->fav_properties;
        $properties=property::query()->paginate($this->per_page);
        foreach($data as $property)
        {
            
            $favproperties[]=$property->pivot->property_id;
            
        }
      
        if(empty($favproperties))
        {
           
            return view('index',compact('properties'));
        }
        else
        {
            return view('index',compact('properties','favproperties'));
        }
        // $data['favProperties']=Fav_Property::all();
        
    }
    else
    {
        $properties=property::query()->paginate($this->per_page);
        return view('index',compact('properties'));
    }
    }


    public function property_details(property $id )
    {
        $property= property::find($id);
        $user=User::find($id->user_id);
       return view('frontend.property_details',compact('property','user'));
    }
}
