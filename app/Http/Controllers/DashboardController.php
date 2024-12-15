<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $recipes = Recipe::all();
        return view('dashboard', compact('recipes'));
    }
    
}
