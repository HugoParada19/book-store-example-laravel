<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
	public function testView()
	{
		return view('test');
	}
}
