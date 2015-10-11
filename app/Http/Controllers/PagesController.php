<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //About Page
    public function about() {

    	$first = 'Rohan';
    	$last = 'Krishna';

    	return view('pages.about')->with(compact('first','last'));
    }
}
