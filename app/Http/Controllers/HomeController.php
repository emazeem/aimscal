<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function contactUs(){
        return view('contact-us');

    }
    public function index(){
        $services=getServices();
        $teams=[
            array('name'=>'Imtiaz Ahmed','image'=>'CEO.jpeg','designation'=>'Chief Executive Officer'),
            array('name'=>'Shahzad Ahmed','image'=>'shahzad.png','designation'=>'Technical Manager'),
            array('name'=>'Riaz Ahmed','image'=>'TM.jpeg','designation'=>'Technical Manager'),
        ];
        $banners=[
            array('title'=>''),
            array('title'=>''),
            array('title'=>''),
        ];
        return view('welcome',compact('services','teams','banners'));
    }
}
