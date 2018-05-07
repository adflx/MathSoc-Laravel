<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Member;

class MemberController extends Controller
{
    //
	
	public static function display(Member $mem){
		$mem = Member::select('*')->get();
		//return $mem;
		return view('memberdisplay',compact('mem'));
	}
	
		public static function edit(Member $meme){
		//
	}
	
	public static function pay(Officer $memp){
		//
	}
}
