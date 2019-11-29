<?php

namespace App\Http\Controllers;

use App\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function changeTheme(){
        return 'change';
    }

    public function userTheme(){
        return 'userTheme';
    }
}