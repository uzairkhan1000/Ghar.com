<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class profilepicture extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    function profile_pic(Request $req)
    {
        
        if ($req->hasFile('profile_pic')) {
            $data = $req->input('profile_pic');
            $photo = $req->file('profile_pic')->getClientOriginalName();
            $destination = base_path() . '/public/uploads/users';
            $req->file('profile_pic')->move($destination, $photo);
            
            User::where('id',Auth::user()->id)
            ->update(['profile_pic'=>$photo,'avatar'=>$photo]);
            
            
         }
        
         return redirect()->back();
    }
    
    function profile(){
        return view('frontend.profile',['user'=>Auth::user()]);
        
    }

}
