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
                'link_img' => ('/'. 'image/'. trim(preg_img($title)). '.jpg'),
            ];
        }

        // if(is_numeric($post)) {

        $word = Word::query()->where('id', $post)->get();
            if($word->contains($post)) {
                $word = wordAccept($word[0]['id'], $word[0]['title'], $word[0]['title_translate'], $word[0]['text'], $word[0]['text_translate'], $word[0]['link'], $word[0]['author_img']);
                return view('words.show', compact('word', 'wordCount'));
            } else {
                return view('words.index');
            }

        // } else if (is_string($post)) {

        //     $word = Word::query()->where('title', $post)->get();

        //         if($word->toArray() ==! null) {
        //             $word = wordAccept($word[0]['id'], $word[0]['title'], $word[0]['title_translate'], $word[0]['text'], $word[0]['text_translate'], $word[0]['link'], $word[0]['author_img']);
        //             return view('words.show', compact('word', 'wordCount')); 
        //         } else if ($word[0]['title'] == 'create') {
        //             return view('words.index');
        //         }
        // }  
    }

    public function edit(Request $request, $post) 
    {

        $word = Word::query()->where('id', $post)->get();

        $link_img = ('/'. 'image/'. trim(preg_img($word[0]['title'])). '.jpg');

        return view('words.edit', compact('word', 'link_img'));
    }

    public function update(Request $request, $post) 
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'title_translate' => ['required', 'string', 'max:50'],
            'text' => ['required', 'string', 'max:100'],
            'text_translate' => ['required', 'string', 'max:100'],
            'check' => ['accepted'],
        ]);

        Word::query()->where('id', $post)->update([
            'title' => $validated['title'],
            'title_translate' => $validated['title_translate'],
            'text' => $validated['text'],
            'text_translate' => $validated['text_translate'],
        ]);

        return redirect()->route('words-all', ['page' => ceil($post / 8)]);
    }


    public function create(Request $request) 
    {
        
        $wordCount = Word::query()->count();
        $post = $wordCount + 1;
        $word = [[
            'id' => $post,
            'title' => 'example title',
            'title_translate' => 'example title_translate',
            'text' => 'example text',
            'text_translate' => 'example text_translate',
            'link' => 'link author img',
            'author_img' => 'author name',
        ]];

        $link_img = ('/'. 'image/'. 'arouse'. '.jpg');

        return view('words.create', compact('word', 'link_img'));
    }


    public function store(Request $request) 
    {
        $validated = $request->validate([
            'id' => ['required', 'string', 'max:5'],
            'title' => ['required', 'string', 'max:50'],
            'title_translate' => ['required', 'string', 'max:50'],
            'text' => ['required', 'string', 'max:100'],
            'text_translate' => ['required', 'string', 'max:100'],
            'check' => ['accepted'],
        ]);
        Word::query()->insertOrIgnore([
            'id' => $validated['id'],
            'title' => $validated['title'],
            'title_translate' => $validated['title_translate'],
            'text' => $validated['text'],
            'text_translate' => $validated['text_translate'],
            'link' => 'sample',
            'author_img' => 'sample',
        ]);

        $word = [[
            'id' => $validated['id'],
            'title' => $validated['title'],
            'title_translate' => $validated['title_translate'],
            'text' => $validated['text'],
            'text_translate' => $validated['text_translate'],
            'link' => 'sample',
            'author_img' => 'sample',
        ]];

        $link_img = ('/'. 'image/'. trim(preg_img($validated['title'])). '.jpg');

        return redirect()->route('words-all', ['page' => ceil($validated['id'] / 8)]);
    }

    public function destroy(Request $request, $post) 
    {
        $validated = $request->validate([
            'check2' => ['accepted'],
        ]);
        Word::query()->where('id', $post)->delete();
        return redirect()->route('words-all', ['page' => ceil(($post-1) / 8)]);
    }
}




