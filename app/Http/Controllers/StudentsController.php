<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
   	public function index()
   	{
   		if(request()->has('section_id')) {
   			return DB::table('students')
   			->where('section_id', request())
   			->get();
   		}
   		$students = DB::table('students')->get();
   		return $students;
   	}
}
