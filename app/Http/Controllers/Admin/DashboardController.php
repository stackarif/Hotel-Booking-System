<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{   
    /**
     * View Dashboard
     * 
     * @return Illuminate\Support\Facades\View
     */
    public function index()
    {   
        return view('admin.dashboard');
    }
}
