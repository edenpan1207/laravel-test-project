<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function let()
    {
        $arr = ['aaa','bbb','ccc','ddd'];
        return view('test', compact('arr'));
    }

    public function fullPage($id,$name) 
    {
    	return 'this page is in '.$id.' and named is '.$name;
    }
    public function contact() 
    {
    	return view('pages.contact');
    }
}
