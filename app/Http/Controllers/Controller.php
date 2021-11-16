<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function homePage(){
        return view('website.index');
    }
        
    function aboutPage(){
        return view('website.pages.about');
    }
    
    function galleryPage(){
        return view('website.pages.gallery');
    }
    
    function contactPage(){
        return view('website.pages.contact');
    }
    
}