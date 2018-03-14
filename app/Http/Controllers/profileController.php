<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;
use Image;

class profileController extends Controller
{
    public function profile()
    {
    	return view('layouts.profile', array('user' => Auth::user())
    	);
    }
    public function avatar(Request $request)
    {
    	if ($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(200, 200)->save(public_path('/uploads/avatar/'. $filename));
    		$user = Auth::user();
    		$user ->avatar =$filename;
    		$user->save();
    	}
    	return view('layouts.profile', array('user' => Auth::user()));
    }
}
