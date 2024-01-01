<?php

namespace App\Http\Controllers;

use App\Models\Word;

class WordAllController extends Controller
{
    public function index() 
    {
        $words = Word::query()->paginate(8);
        return view('words-all.index', compact('words'));
    }
}
