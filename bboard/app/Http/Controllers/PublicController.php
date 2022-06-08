<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('index', [
            'bbs' => Bb::latest()->get()
        ]);
    }


    public function show(Bb $bb)
    {
        return view('show', ['bb' => $bb]);
    }
}