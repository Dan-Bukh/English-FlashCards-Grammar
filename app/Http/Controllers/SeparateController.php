<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class SeparateController extends Controller
{
    public function index() 
    {
        


        $words = array(

            );

                //** Добавление слов в таблицу
            // for($i = 0; $i < count($words); $i++) {
            //     Word::query()->insertOrIgnore([
            //         'id' => $words[$i][0],
            //         'title' => $words[$i][1],
            //         'title_translate' => $words[$i][2],
            //         'text' => $words[$i][3],
            //         'text_translate' => $words[$i][4],
            //         'link' => $words[$i][5],
            //         'author_img' => $words[$i][6],
            //     ]);
            // } //*/
            
            // foreach ($words as $word) {

            // }
            // dd($words);
            // return view('separate', compact('words'));
    }
}

