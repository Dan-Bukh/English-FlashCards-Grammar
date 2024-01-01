<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    public function index()
    {
        return view('words.index');
    }

    public function show($post) 
    {
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
        $word = Word::query()->where('id', $post)->get();
            if($word->contains($post)) {
                $word = wordAccept($word[0]['id'], $word[0]['title'], $word[0]['title_translate'], $word[0]['text'], $word[0]['text_translate'], $word[0]['link'], $word[0]['author_img']);
                return view('words.show', compact('word', 'wordCount'));
            } else {
                return view('words.index');
            }
    }

    public function edit($post) 
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


    public function create() 
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




