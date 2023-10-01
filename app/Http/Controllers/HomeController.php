<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;
use Mail; 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $active_menu = 'home';
        return view('welcome',compact('active_menu'));
    }


    public function aboutus(Request $request)
    {        
        $active_menu = 'aboutus';
        return view('about-us',compact('active_menu'));         
    }

    public function contactUs(Request $request)
    {   
        $active_menu = 'contactus';
        return view('contact-us',compact('active_menu'));         
    }

    public function products(Request $request)
    {   
        $active_menu = 'products';
        return view('products',compact('active_menu'));         
    }
    //productDetail
    public function productDetail(Request $request)
    {   
        $active_menu = 'products';
        return view('product-detail',compact('active_menu'));         
    }
    
    public function services(Request $request)
    {   
        $active_menu = 'services';
        return view('services',compact('active_menu'));         
    }
}
