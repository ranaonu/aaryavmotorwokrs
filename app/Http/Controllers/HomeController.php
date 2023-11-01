<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;
use Mail; 
use App\Models\Portfolio;
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

    //ourPortfolio
    public function ourPortfolio(Request $request)
    {   
        $active_menu = 'portfolio';
        $photos = Portfolio::orderBy("id", "DESC")->where('type','photo')->take(6)->get()->toArray();
        $videos = Portfolio::orderBy("id", "DESC")->where('type','video')->take(6)->get()->toArray();
        /*echo '<pre>';
        print_r($photos);
        exit;*/
        return view('portfolio',compact('active_menu','photos','videos'));         
    }

    //allVideos
    //allPhotos

    public function allPhotos(Request $request)
    {   
        $active_menu = 'portfolio';
        $photos = Portfolio::orderBy("id", "DESC")->where('type','photo')->get()->toArray();
        /*echo '<pre>';
        print_r($photos);
        exit;*/
        return view('all-photos',compact('active_menu','photos'));         
    }

    public function allVideos(Request $request)
    {   
        $active_menu = 'portfolio';
        $videos = Portfolio::orderBy("id", "DESC")->where('type','video')->get()->toArray();
        /*echo '<pre>';
        print_r($photos);
        exit;*/
        return view('all-videos',compact('active_menu','videos'));         
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
            $message->to('aaryavmotorworks@gmail.com');
            $message->from('info@aaryavmotorworks.com','Aaryav Motor Works');
        }); 

       Mail::send('emails.contact_us', $data, function($message2) use ($data){
            $message2->subject("Query");
            $message2->to('rajeshthakur.gcd@gmail.com')
            $message2->from('info@aaryavmotorworks.com','Aaryav Motor Works');
        }); 
              
  
        if (Mail::failures()) {
           $data['status']= 'error';
        }else{
           $data['status']= 'success';
        }
        echo json_encode($data);
    }

}
