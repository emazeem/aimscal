<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        $subject=$request->subject;
        $message=$request->message;
        $to = 'emazeem07@gmail.com';
        $from=$request->email;
        Mail::html($message, function ($message) use ($subject, $to, $from) {
            $message->subject($subject)->to($to)->from($from);
        });
        return response()->json(['success' => 'Email sent successfully']);
    }

}
