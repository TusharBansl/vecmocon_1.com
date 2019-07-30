<?php

namespace vecmocon\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function home(){
        return view('home',[

        ]);
    }
    public function motorcontroller(){
        return view('motorcontroller',[
            
        ]);
    }
    public function bms(){
        return view('bms',[
            
        ]);
    }
    public function ivec(){
        return view('ivec',[
            
        ]);
    }
    public function services(){
        return view('services',[
            
        ]);
    }
    public function team(){
        return view('team',[
            
        ]);
    }
    public function partner(){
        return view( 'partner',[
            
        ]);
    }
    public function contact(){
        return view('contact',[
            
        ]);
    }
}
