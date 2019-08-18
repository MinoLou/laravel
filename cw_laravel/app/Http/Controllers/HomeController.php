<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$data = $request->session()->all();
		var_dump($data);
        return view('home', compact('data'));
    }
	
	//public function show(Request $request)
    //{
        //$value = $request->session()->get('key');

        
    //}
}
