<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Officer;

class OfficerController extends Controller {
	
	public static function display(Officer $off){
		$off = Officer::select('*')->get();
	
	//	return $off;
		return view('officerdisplay',compact('off'));
	}
	
	public static function edit(Officer $offe){
		//
	}
	
	public static function editpass(Officer $offp){
		//
	}
    
	
}