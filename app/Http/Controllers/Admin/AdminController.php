<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    
    public function index()
    {
        //dd('entra');
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' entro al dashboard a las '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('admin.dashboard');
    }
}
