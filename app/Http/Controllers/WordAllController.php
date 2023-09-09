<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class WordAllController extends Controller
{
    public function index(Request $request) {
        $words = Word::query()->paginate(8);
        return view('words-all.index', compact('words'));
    }
}
