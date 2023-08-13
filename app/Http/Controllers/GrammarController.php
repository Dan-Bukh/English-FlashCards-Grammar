<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrammarController extends Controller
{
    public function index(Request $request) 
    {


        $test = (object) [
            'title' => 'Времена глагола',
            'content' => [
            'Future Continuous',
            'Future in the Past',
            'Future Perfect',
           ],
        ];
        $posts = [
            'Времена глагола', 
            'Словообразование', 
            'Части речи', 
            'Модальные глаголы', 
            'Глаголы', 'Обороты и Конструкции', 
            'Начинающим', 
            'Правописание', 
            'Предложение'
        ];
        return view('rules.index', compact(['posts', 'test']));
    }

    public function show(Request $request) 
    {

        $test = (object) [
            'title' => 'Времена глагола',
            'content' => [
            'Future Continuous',
            'Future in the Past',
            'Future Perfect',
           ],
        ];
        $posts = [
            'Времена глагола', 
            'Словообразование', 
            'Части речи', 
            'Модальные глаголы', 
            'Глаголы', 'Обороты и Конструкции', 
            'Начинающим', 
            'Правописание', 
            'Предложение'
        ];
        return view('rules.show', compact(['posts', 'test']));
    }
}
