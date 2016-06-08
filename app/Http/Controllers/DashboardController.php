<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use DB;



use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use App\User;

use Input;
use Session;
use Response;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	public $user 		= null;
	public $userRole 	= null;
	public $userName 	= null;
	
	
    public function __construct()
    {
        $this->middleware('auth');
		$user = Auth::user();
		
		$this->user = $user;
		
		
		if($this->user)
		{
			$this->userName =  ucfirst($user->first_name).' '.ucfirst($user->last_name);
			
			//$userObj = User::findOrFail($this->user->id);
			
			if($this->user->hasRole('admin')){
				$this->userRole =  "Admin";
			} else if($this->user->hasRole('user')){
				$this->userRole =  "User";
			}else if($this->user->hasRole('expert')){
				$this->userRole =  "Expert";
			}
		}
		
		//$user->level()
		//$user->is('expert|user', false);

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
	
	public function accessdenied()
    {
        return view('dashboard.accessdenied');
    }
	
    public function index()
    { 
	   return view('dashboard.index', ['userRole' => $this->userRole, 'userName' => $this->userName]);	   
    }

	
}
