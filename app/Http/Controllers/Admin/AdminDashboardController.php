<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    //admin dashboard
    public function index(){
        return view('admin.home.index');
    }//end method









}//end main
