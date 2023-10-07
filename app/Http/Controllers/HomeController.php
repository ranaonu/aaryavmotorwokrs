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
        $active_menu = 'about';
        return view('about-us',compact('active_menu'));         
    }

    public function contactUs(Request $request)
    {   
        $active_menu = 'contact';
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


    public function sendContactUs(Request $request)
    {   
        $data=$request->all();
        /*echo '<pre>';
        print_r($data);
        exit;*/
        
        $data['messages'] = $data['message'];
        $data['introLines'] = 'New update';
       
       Mail::send('emails.contact_us', $data, function($message) use ($data){
            $message->subject("Query");
            $message->to('rajeshthakur.gcd@gmail.com');
            $message->from('info@aaryavmotorworks.com','Aaryav Motor Works');
        }); 
              
  
        if (Mail::failures()) {
           $data['status']= 'error';
        }else{
           $data['status']= 'success';
        }
        echo json_encode($data);


    }

}
