<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {
    function dashboard(){
        return view('admin.dashboard');
    }
   
}
