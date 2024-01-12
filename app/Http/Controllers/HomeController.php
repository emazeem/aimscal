<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function contactUs(){
        return view('contact-us');
    }
    public function aboutUs(){
        return view('about-us');
    }
    public function ourTeam(){
        $teams=ourTeam();
        return view('team',compact('teams'));
    }
    public function generateRFQ(){
        return view('generate-requests');
    }

    public function service(Request $request){
        if ($request->type=='calibration-services'){
            return view('services.calibration');
        }
        abort('404');
    }

    public function index(){
        $services=getServices();
        $teams=ourTeam();
        $gallery=galleryImages();
        $banners=[
            array('title'=>''),
            array('title'=>''),
            array('title'=>''),
        ];
        return view('welcome',compact('services','teams','banners','gallery'));
    }
}
