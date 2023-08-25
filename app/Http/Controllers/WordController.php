<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class WordController extends Controller
{
    public function index(Request $request) {
        return view('words.index');
    }

    public function show(Request $request, $post) 
    {
        //$card = $request->input('card');

        // $word = [
            
        //     '1' => (object) [
        //         'title' => 'Arrest',
        //         'title_translated' => 'задерживать, тормозить',

        //         'text' => 'A dead calm arrested our progress.',
        //         'text_translated' => 'Мёртвый штиль остановил наше продвижение.',
                
        //         'img' => '\image\arrest.jpg',
        //     ],

        //     '2' => (object) [
        //         'title' => 'Nominate',
        //         'title_translated' => 'выдвигать, номинировать',
    
        //         'text' => 'candidates were nominated.',
        //         'text_translated' => 'Были выдвинуты трое кандидатов.',
                
        //         'img' => '\image\nominate.jpg',
        //         ]
        //     ];

        // if ($post >= 0  && $post <= count($word)) {
        //     return view('words.show', compact('word', 'post'));
        // } else {
        //     return abort('404');
        // }
        $wordCount = Word::query()->count();
        function wordAccept ($id, $title, $title_translate, $text, $text_translate, $link, $author_img) {
            return $word = (object) [
                'id' => $id,
                'title' => $title,
                'title_translate' => $title_translate,
                'text' => $text,
                'text_translate' => $text_translate,
                'link' => $link,
                'author_img' => $author_img,
                'link_img' => ('/'. 'image/'. $title. '.jpg'),
            ];
        }

        if(is_numeric($post)) {

            $word = Word::query()->where('id', $post)->get();
                if($word->contains($post)) {
                    $word = wordAccept($word[0]['id'], $word[0]['title'], $word[0]['title_translate'], $word[0]['text'], $word[0]['text_translate'], $word[0]['link'], $word[0]['author_img']);
                    return view('words.show', compact('word', 'wordCount'));
                } else {
                    return view('words.index');
                }

        } else if (is_string($post)) {

            $word = Word::query()->where('title', $post)->get();

                if($word->toArray() ==! null) {
                    $word = wordAccept($word[0]['id'], $word[0]['title'], $word[0]['title_translate'], $word[0]['text'], $word[0]['text_translate'], $word[0]['link'], $word[0]['author_img']);
                    return view('words.show', compact('word', 'wordCount')); 
                } else {
                    return view('words.index');
                }
        }  
    }
}




