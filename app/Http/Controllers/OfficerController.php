<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Officer;

class OfficerController extends Controller {


	public static function dashboard(){
		return view('officerdashboard');
	}

	public static function display(Officer $officer){
		$officer = Officer::select('studID','lname','fname','mi','position','course','year','section','created_at','updated_at')->get();

	//	return $officer;
		return view('officerdisplay',compact('officer'));
	}

	public static function edit($officer){
		//
			//$officer = Officer::select('studID')->distinct()->get();
			//$officer = $request->all();



		//return $officer;
		return view('officeredit',compact('officer'));


	}

	public static function editpass(Officer $officer){
		//
	}


}
