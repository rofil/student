<?php

namespace Rofil\Student\Http\Controllers;

use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
	public function index()
	{
		return view("RofilStudent::index");
	}
}