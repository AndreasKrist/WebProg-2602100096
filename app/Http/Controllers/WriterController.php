<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index(){
        $writers = Writer::all();
        return view('menu.writers', compact('writers'));
    }

    public function detail($writerId){
        $writer = Writer::find($writerId);
        $details = $writer->detail;
        return view('menu.writer-detail')->with(['details' => $details, 'writer' => $writer]);
    }
}
