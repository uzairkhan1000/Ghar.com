<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function addProfile(Request $req)
    {
        $id=Auth::user()->id;

        $query=User::where('id',$id)
            ->update(['phone'=>$req->phone , 'name'=>$req->name ,'mobile'=>$req->mobile , 'email_address'=>$req->email_address, 'skype'=>$req->skype , 'about'=>$req->about]);
            if($query)
            {
                return redirect()->back()->with('status',$query);
            }else
            {
                return redirect()->back()->with('error','Profilr not Updated');
            }

      
        
    }
    
}
