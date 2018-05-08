<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Officer;

class OfficerController extends Controller {


	public static function dashboard(){
		return view('officerdashboard');
	}

	public static function display(Officer $officer){
		$officer = Officer::select('*')->get();

	//	return $officer;
		return view('officerdisplay',compact('officer'));
	}

	public static function edit(Officer $officer){
		//

			return $officer;
			//return view('officeredit',compact('officer'));


	}

	public static function editpass(Officer $officer){
		//
	}


}
