<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
     * @return \Illuminate\Http\Response
     */
    
    public function index(Request $request)
  {
    //var_dump(Auth::user()->roles->name)
    $request->user()->authorizeRoles(['employee','manager']);
    return view('home');
  }
  
  public function Stuff(Request $request)
  {
    $request->user()->authorizeRoles('manager');
    return view('admin.home');
  }
  
  
}
