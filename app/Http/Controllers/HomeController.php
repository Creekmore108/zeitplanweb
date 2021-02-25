<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setting;
use App\Models\Gallery;
use App\Models\Feature;
use App\Models\Faq;
use App\Models\Plan;
use App\Models\EmailList;
use App\Models\Contact;


class HomeController extends Controller
{
    // public $email = ''; 

    // protected $rules = [
    //     'email'     => 'required|email',
    // ];

    public function index()
    {
        $settings = Setting::pluck('value', 'key');
        // dd($settings);
        
        $faqs = Faq::all();
        $features = Feature::all();
        // dd($features);
        $plans = Plan::all();
        // dd($plans);

        $galleries = Gallery::all();
        // dd($galleries);
        
        
         return view('home', compact('settings', 'faqs', 'features', 'plans', 'galleries'));

    }

    public function save_email(Request $request)
    {
        // dd($request);
        EmailList::create($request->all());
        
        return redirect()->back();

    }

    public function contact_form(Request $request)
    {
        // dd($request);
        Contact::create($request->all());
        
        return redirect()->back();
    }

    
    
}