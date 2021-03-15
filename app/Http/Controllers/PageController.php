<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\contact;

class PageController extends Controller
{
    public function home()
    {
    	return view ('index');
    }

    public function about()
    {
    	return view ('about');
    }

    public function skill()
    {
    	return view ('skill');
    }

     public function contact()
    {
    	return view ('contact');
    }


    // public function table()
    //{
    	//$pelajar = \App\Models\student::all();
    	//$pelajar = student::all();
    	//return view('table', ['student'=>$pelajar]);

    	//return view ('table');
    //}

    public function store(Request $request)
    {
            contact::create($request->all());
            return redirect('/');
    }

}
