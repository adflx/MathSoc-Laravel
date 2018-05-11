<?php

namespace App\Http\Controllers;

use Illuminate\Eloquent\Collection;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Model\Officer;
use App\User;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class OfficerController extends Controller {


	public static function dashboard(){

		return view('officerdashboard');
	}

	public static function display(Officer $officer){
		$officer = Officer::select('studID','lname','fname','mi','position','course','year','section','created_at','updated_at','role')->get();

	//	return $officer;
		return view('officerdisplay',compact('officer'));
	}

	public static function index(Officer $officer){
		return view('officerdashboard');
	}

	public static function show(Officer $officer){
		$officer = Officer::select('studID','lname','fname','mi','position','course','year','section','created_at','updated_at','role')->get();

	//	return $officer;
		return view('officerdisplay',compact('officer'));
	}



	public static function edit($id){
		//
			//$officer = Officer::select('studID')->distinct()->get();
			//$officer = $request->all();
			$officer = Officer::select('studID','lname','fname','mi','position','course','year','section','created_at','updated_at','updated_by','role')
			->where('studID',$id)
			->get();
			return view('officeredit',compact('officer','id'));
	}

	public static function update(Request $request,$id) {

		if(isset($_POST['password'])){
			$officer = Officer::select('password')
			->where('studID',$id)
			->first();
		// 	validate($request, [
		//
    //     'password' => 'required|string|min:6|confirmed'
		//
    // ]);
		$request->user()->fill([
						'password' => 'required|string|min:6|confirmed',
            'password' => Hash::make($request->password)
        ])->save();

	//	$officer->password =  ;


		 return	redirect('/');
		}

		else {
			$officer = Officer::select('*')
			->where('studID',$id)
			->first();
			if(Auth::check()){
				$lname = Auth::user()->lname;
				$fname = Auth::user()->fname;
				$name = $fname ." ". $lname;
			}

			$officer->fname=$request->fname;
			$officer->lname=$request->lname;
			$officer->mi=$request->mi;
			$officer->studID=$request->studID;
			$officer->course=$request->course;
			$officer->year=$request->year;
			$officer->section=$request->section;
			$officer->position=$request->position;
			$officer->updated_at = now()->toDateTimeString();
			$officer->updated_by = $name;
			$officer->save();
			return redirect('/officer/display');

		}




		//return $officer;


	}


	// protected function validator(array $data)
	// {
	// 		return Validator::make($data, [
	// 				'fname' => 'required|string|max:255',
	// 	'lname' => 'required|string|max:255',
	// 	'mi' => 'required|string|max:255',
	// 	'course' => 'required|string|max:255',
	// 	'year' => 'required|integer|max:5',
	// 	'section' => 'required|string|max:255',
	// 	'position' => 'required|string|max:255',
	// 				'studID' => 'required|string|max:255|unique:officers',
	// 				'password' => 'required|string|min:6|confirmed',
	// 		]);
	// }
	//
	//
	// protected function create(array $data)
	// {
	// 		return User::create([
	// 				'fname' => $data['fname'],
	// 				'lname' => $data['lname'],
	// 				'mi' => $data['mi'],
	// 				'course' => $data['course'],
	// 				'year' => $data['year'],
	// 				'section' => $data['section'],
	// 				'position' => $data['position'],
	// 				'studID' => $data['studID'],
	// 				'password' => Hash::make($data['password']),
	// 		]);
	// }


	public static function editpass(){
		//
		$id = Auth::user()->studID;
		$officer = Officer::select('password')
		->where('studID',$id)
		->get();
		return view('officerpass',compact('officer','id'));
	}


}
