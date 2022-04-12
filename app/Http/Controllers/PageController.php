<?php

namespace App\Http\Controllers;

use App\Models\Specialty;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $categories = Specialty::inRandomOrder()->with('blogs')->limit(7)->get();
        return view('index', compact('categories'));
    }

}
