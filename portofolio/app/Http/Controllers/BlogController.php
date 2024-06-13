<?php

namespace App\Http\Controllers;

use ulluminate\Http\Request;

Class BlogController extends Controller 
{
    public function home(){
		return view('home');
	}
 
	public function portofolio(){
		return view('portofolio');
	}
 
	public function kontak(){
		return view('kontak');
	}
}