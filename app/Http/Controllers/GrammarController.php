<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrammarController extends Controller
{
    public function index(Request $request) 
    {


        // $test = (object) [
        //     'title' => 'Времена глагола',
        //     'content' => [
        //     'Future Continuous',
        //     'Future in the Past',
        //     'Future Perfect',
        //    ],
        // ];
        $posts = [
            ['title' => 'Времена глагола', 
                'Future Continuous',
                'Future in the Past',
                'Future Perfect',
                'Future Simple',
                'Have something done',
                'Пассивный залог',
                'Past Continuous',
                'Past Perfect',
                'Past Perfect Continuous',
                'Past Simple',
                'Present Continuous',
                'Present Perfect',
                'Present Perfect Continuous',
                'Present Simple',
                'Согласование времен',
                'Таблица всех времен',
            ], 

            ['title' => 'Словообразование',
                'Степени сравнения',
                'Притяжательный падеж',
                'Префиксы',
                'Суффиксы',
                'Окончание ed',
                'Окончание ing',
                'Окончание s / es',
            ], 

            ['title' => 'Части речи',
                'Прилагательные',
                'Наречия',
                'Артикль',
                'Союзы',
                'Указательные местоимения',
                'Неопределенные местоимения',
                'Междометия',
                'Исключения множественного числа',
                'Существительные',
                'Числительные',
                'Предлоги',
                'Местоимения',
                'Вопросительные слова',
                'Взаимные местоимения',
                'Относительные местоимения',
            ], 
            ['title' => 'Модальные глаголы',
                'Can и Could',
                'Dare',
                'Had better',
                'Have to',
                'May и Might',
                'Must',
                'Need',
                'Shall',
                'Should и Ought to',
                'To be to',
                'Will и Would',
            ], 
            ['title' => 'Глаголы',
                'Герундий',
                'Инфинитив',
                'Неправильные глаголы',
                'Наклонения',
                'Причастие',
                'Фразовые глаголы',
                'Сослагательное наклонение',
                'Глагол to be',
                'Виды глаголов',
            ], 
            ['title' => 'Обороты и Конструкции',
                'There is / There are',
                'To be going to',
                'Used to',
            ], 
            ['title' => 'Начинающим', 
                'Английский алфавит',
                'Правила чтения',
                'Фонетика',
            ], 
            ['title' => 'Правописание',
                'Заглавные буквы',
                'Даты и время',
                'Пунктуация',
            ], 
            ['title' => 'Предложение', 
                'Сложные предложения',
                'Условные предложения',
                'Косвенная речь',
                'Главные члены предложения',
                'Второстепенные члены предложения',
                'Простые предложения',
                'Типы вопросов',
                'Порядок слов в предложении',
            ],
        ];
        return view('rules.index', compact(['posts']));
    }

    public function show(Request $request) 
    {


        return view('rules.show');
    }
}
