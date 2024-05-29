<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class AdminController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.index', compact('news'));
    }
}
