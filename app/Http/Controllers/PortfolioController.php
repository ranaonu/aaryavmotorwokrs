<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Config;
use Mail; 
use App\Models\Portfolio;
class PortfolioController extends Controller
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
    public function index(Request $request)
    {
        $active_menu = 'home';
        return view('welcome',compact('active_menu'));
    }

    //addPortfolio
    public function addPortfolio(Request $request)
    {
        $active_menu = 'portfolio';
        return view('add_portfolio',compact('active_menu'));
    }

    //addNewPortfolio
    public function addNewPortfolio(Request $request)
    {
        $data = $request->all();
        $image = $request->file('photos');
        if(isset($image) && !empty($image)){
            $imagename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) .'_'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/portfolio');
            $image->move($destinationPath, $imagename);
            $data['photo'] = $imagename;
        } else {
            $data['photo'] = '';
        }

        $saveImage = Portfolio::create(
                $data
        );

        $id = $saveImage['id'];        
        if ($id) {
            $data['status']='success';
            $data['msg']='Data uploaded successfully';
        } else {
            $data['status']='error';
            $data['msg']='Something went wrong. Please try again!';
        }
        echo json_encode($data);

        
    }
}
