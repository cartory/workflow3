<?php

namespace App\Http\Controllers;

use App\Theme;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\Environment\Console;

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
        // $theme = Theme::findOrFail(Auth::user()->theme_id);
        $theme = Auth::user()->getBackgroundColor();
        file_put_contents(public_path('bitacora.txt'),Auth::User()->email.' Ingreso Existosamente a las '.date("Y-m-d H:i:s").PHP_EOL,FILE_APPEND);
        return view('home', compact('theme'));
    }
}