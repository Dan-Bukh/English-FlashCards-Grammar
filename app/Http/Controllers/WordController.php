<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class WordController extends Controller
{
    public function index(Request $request) {
        return view('words.index');
    }

    public function show(Request $request, int $post) 
    {
        //$card = $request->input('card');

        $word = [
            
            '1' => (object) [
                'title' => 'Arrest',
                'title_translated' => 'задерживать, тормозить',

                'text' => 'A dead calm arrested our progress.',
                'text_translated' => 'Мёртвый штиль остановил наше продвижение.',
                
                'img' => '\image\arrest.jpg',
            ],

            '2' => (object) [
                'title' => 'Nominate',
                'title_translated' => 'выдвигать, номинировать',
    
                'text' => 'candidates were nominated.',
                'text_translated' => 'Были выдвинуты трое кандидатов.',
                
                'img' => '\image\nominate.jpg',
                ]
            ];

        if ($post >= 0  && $post <= count($word)) {
            return view('words.show', compact('word', 'post'));
        } else {
            return abort('404');
        }

        

        
    }
}
