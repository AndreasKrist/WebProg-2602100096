<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index($categoryId){
        $category = Category::find($categoryId);
        $details = $category->detail;
        return view('menu.home')->with('details', $details);
    }
}
