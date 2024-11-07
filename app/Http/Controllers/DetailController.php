<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Category;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(){
        $details = Detail::all();
        return view('menu.home')->with('details', $details);
    }

    public function popular(){
        $details = Detail::orderBy('tanggalPost', 'desc')->paginate(3);
        return view('menu.popular')->with('details', $details);
    }

    public function detail($categoryId, $detailId){
        $detail = Detail::find($detailId);
        return view('menu.detail')->with('details', $detail);
    }
}