<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Dymantic\InstagramFeed\Profile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $profile = new Profile;
        return $profile->feed();
        
        $url = "https://api.instagram.com/oauth/authorize
                ?client_id=477746089904933
                &redirect_uri=http://localhost/stipple2/public/getcode
                &scope=user_profile,user_media
                &response_type=code";

        // $url = "https://api.instagram.com/oauth/authorize
        //         ?client_id=477746089904933
        //         &redirect_uri=http://localhost/stipple2/public/
        //         &scope=user_profile,user_media
        //         &response_type=code";
        // $response = Http::get('$url',[
        //     'client_id' => 477746089904933,
        //     'redirect_uri' => 'http://localhost/stipple2/public/getcode',
        //     'scope' => 'user_profile,user_media',
        //     'response_type' => 'code'
        // ]);
        $response = Http::get($url);
        return $response;
        dd($response->body() , $response->json() , $response->status());
        return view('index')->with();
    }

    public function getCode(Request $request)
    {
        dd($request);
    }
}
