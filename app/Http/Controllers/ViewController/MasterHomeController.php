<?php

namespace App\Http\Controllers\ViewController;

use TechnoCelebes\BasicController\MasterCont\ViewController;
use Illuminate\Http\Request;

class MasterHomeController extends ViewController
{
    public function __construct(Request $request){
    	parent::__construct($request);
        $this->set_data_send("body_class",array());

        $vendor_css = array('vendor/bootstrap/css/bootstrap.min.css','custom/home/home.css','vendor/bootstrap-icon/bootstrap-icons.css');


		$vendor_js = array('vendor/bootstrap/js/bootstrap.bundle.min.js','assets/vendor/bootstrap/js/bootstrap.min.js');

    	$this->set_css_data($vendor_css,"assets/");
    	$this->set_js_data($vendor_js,"assets/");
    }
}
