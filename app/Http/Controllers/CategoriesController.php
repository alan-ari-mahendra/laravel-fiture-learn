<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
       $categories = Category::with('posts')->get();
    //    dd($categories);
        return view('category', ['categories' => $categories]);
    }
}
