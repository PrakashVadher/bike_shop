<?php
namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

class HomeController extends Controller {
    function index(){
        return view('front.home.index');
    }
   
}
