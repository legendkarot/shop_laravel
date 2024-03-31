<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    public function index(){
        return view('backend.index', [
            'title' => 'Admin login'
        ]);
    }
    
}
