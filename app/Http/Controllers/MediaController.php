<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MediaController extends Controller
{
    //
    public function index() {
    	return view('media.index');
    }
}
