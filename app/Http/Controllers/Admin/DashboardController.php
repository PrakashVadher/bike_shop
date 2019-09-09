<?php
namespace App\Http\Controllers\Admin;

use Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller {
    
    public function dashboard()
    {
    	// dd(Auth::guard('admin')->user()->name);
        return view('admin.dashboard');
    }
   	
   	public function logout()
    {
    	Auth::guard('admin')->logout();
    	return redirect(route('admin.loginForm'));
    }

}
