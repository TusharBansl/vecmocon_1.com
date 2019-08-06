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
    public function associates(){
        return view( 'associates',[
            
        ]);
    }

    public function team(){
        return view('team',[
            
        ]);
    }
    
    public function contact(){
        return view('contact',[
            
        ]);
    }
}
