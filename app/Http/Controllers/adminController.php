<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use View;
use Auth;

class adminController extends Controller
{
    public function adminPanel()

    {
    	// $users = User::all();
    	// return $users;
    	return view('adminPanel.admin');
    }
}
