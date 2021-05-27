<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class ProfileController extends Controller
{
    function addProfile(Request $req)
    {
        $id=Auth::user()->id;

        User::where('id',$id)
            ->update(['phone'=>$req->phone , 'name'=>$req->name]);
        

      
        
    }
    
}
