<?php

namespace App\Http\Controllers\ViewController\Home;

use App\Http\Controllers\ViewController\MasterHomeController;

use Illuminate\Http\Request;

class HomeController extends MasterHomeController
{
    public function __construct(Request $request){
    	parent::__construct($request);
    }

    public function home(){
        return view('home.content.home.home', $this->get_data_send());
    }
}
