<?php
namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
    	if (Auth::guard('admin')->check()) {
            return redirect(route('admin.dashboard'));
        }

        return view('admin.login');
    }
   	
   	public function login(Request $request)
    {
    	$this->validate($request, [
          'email'=>'required|email|exists:admins,email',
          'password'=>'required',
        ]);

    	if($admin = Admin::where('email', $request->get('email'))->first()) {
    		if(\Hash::check($request->get('password'), $admin->password)) {
    			Auth::guard('admin')->login($admin);

    			return redirect(route('admin.dashboard'));
    		} else {
    			return redirect()->back()->with(['error' => 'Invalid Email & Password.']);
    		}
    	} else {
			return redirect()->back()->with(['error' => 'Invalid Email & Password.']);
		}
    }
}
