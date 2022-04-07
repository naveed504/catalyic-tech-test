<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       

        if (Auth::user()->usertype == 1) {
            parent::successMessage('Admin Login successfully');
            return redirect('admin/dashboard');
        } elseif(Auth::user()->usertype == 2) {
           Auth::logout();
           parent::dangerMessage("You Are Not Admin Access, Please try Again");
           return redirect('/');
        }
    }
}
