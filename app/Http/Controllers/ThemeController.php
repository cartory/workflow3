<?php

namespace App\Http\Controllers;

use App\Theme;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThemeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $themes = Theme::all();
        return view('theme', compact('themes'));
    }

    public function update(Request $request, $id){
        $user = Auth::user();
        $user->theme_id = $id;
        $user->save();
        return redirect('/themes');
    }
}