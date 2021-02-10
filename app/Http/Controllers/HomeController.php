<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Setting;
use App\Models\Gallery;
use App\Models\Feature;
use App\Models\Faq;
use App\Models\Price;
use App\Models\EmailList;


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
        $prices = Price::all();

        $galleries = Gallery::all();
        // dd($galleries);
        
        
         return view('home', compact('settings', 'faqs', 'features', 'prices', 'galleries'));

    }

    public function save_email($email)
    {
        dd($email);
        EmailList::create($email);
        
        // User::create($request->all());


    }

    public function contact_form()
    {


    }

    
}