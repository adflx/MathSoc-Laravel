<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Member;
use Illuminate\Eloquent\Collection;
use Illuminate\Http\Response;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class MemberController extends Controller
{
    //



		public static function dashboard(){

			return view('memberdashboard');
		}

		public static function index(){
			return view('memberdashboard');
		}

	public static function display(Member $member){
		$member = Member::select('*')->get();
		//return $mem;
		return view('memberdisplay',compact('member'));
	}

	public static function show(Member $member){
		$member = Member::select('*')->get();
		//return $mem;
		return view('memberdisplay',compact('member'));
	}

		public static function edit($id){
		$member = Member::select('*')->where('idno',$id)->get();
		//return $member;
	return view('memberedit',compact('member','id'));
	}

	public static function update(Request $request,$id){
	//	return $request;
		if(Auth::check()){
			$lname = Auth::user()->lname;
			$fname = Auth::user()->fname;
			$name = $fname ." ". $lname;
		}
			$member = Member::select('*')->where('idno',$id)->first();
			$member->fname=$request->fname;
			$member->lname=$request->lname;
			$member->mi=$request->mi;
			$member->idno=$request->idno;
			$member->course=$request->course;
			$member->sex=$request->sex;
			$member->professor=$request->professor;
			$member->subject=$request->subject;
			$member->datepay=$request->datepay;
			$member->paystat=$request->paystat;
			$member->memstat=$request->memstat;
			$member->memsy=$request->memsy;
			$member->updated_at = now()->toDateTimeString();
			$member->updated_by = $name;
			$member->save();
			return redirect('/member/display');

		}






	public static function pay($id){
		//
		if(Auth::check()){
			$lname = Auth::user()->lname;
			$fname = Auth::user()->fname;
			$name = $fname ." ". $lname;
		}
		$member = Member::select('*')->where('idno',$id)->first();
		$member->paystat= 'PAID';
		$member->memstat = 'MEMBER';
		$member->pay_confirm = $name;
		$member->updated_at = now()->toDateTimeString();
		$member->save();
		return redirect('/member/display');
	}

	public static function new(){
		//
		return view('membernew');
	}

	public static function add(Request $request){
		if(Auth::check()){
			$lname = Auth::user()->lname;
			$fname = Auth::user()->fname;
			$name = $fname ." ". $lname;
		}

		$member =  new Member();
		$member->fname=$request->fname;
		$member->lname=$request->lname;
		$member->mi=$request->mi;
		$member->idno=$request->idno;
		$member->course=$request->course;
		$member->sex=$request->sex;
		$member->professor=$request->professor;
 		$member->subject=$request->subject;
		$member->datepay=$request->datepay;
		$member->paystat=$request->paystat;
		$member->memstat=$request->memstat;
		$member->memsy=$request->memsy;
		$member->created_at = now()->toDateTimeString();
		$member->updated_at = now()->toDateTimeString();
		$member->updated_by = $name;
		$member->save();
		return redirect('/member/display')->with('success', 'New Member has been added');

	}










}
