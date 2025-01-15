<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartPageController extends Controller
{
    public function index()
    {
        $hour = now()->hour;

        if ($hour >= 5 && $hour < 12) {
            $greeting = 'Good Morning';
        } elseif ($hour >= 12 && $hour < 18) {
            $greeting = 'Good Afternoon, Darling';
        } else {
            $greeting = 'Good Night';
        }

        return view('welcome', compact('greeting'));
    }
}
