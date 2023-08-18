<?php

namespace App\Http\Controllers;

use App\Models\Rule;
use Illuminate\Http\Request;

class GrammarController extends Controller
{
    public function index(Request $request) 
    {
        $posts = [
            ['title' => 'Времена глагола', 
                ['link' => 'future-continuous', 'Future Continuous'],
                ['link' => 'future-in-the-past', 'Future in the Past'],
                ['link' => 'future-perfect', 'Future Perfect'],
                ['link' => 'future-simple', 'Future Simple'],
                ['link' => 'have-something-done', 'Have something done'],
                ['link' => 'passive-voice', 'Пассивный залог'],
                ['link' => 'past-continuous', 'Past Continuous'],
                ['link' => 'past-perfect', 'Past Perfect'],
                ['link' => 'past-perfect-continuous', 'Past Perfect Continuous'],
                ['link' => 'past-simple', 'Past Simple'],
                ['link' => 'present-continuous', 'Present Continuous'],
                ['link' => 'present-perfect', 'Present Perfect'],
                ['link' => 'present-perfect-continuous', 'Present Perfect Continuous'],
                ['link' => 'present-simple', 'Present Simple'],
                ['link' => 'time-alignment', 'Согласование времен'],
                ['link' => 'table-of-all-times', 'Таблица всех времен'],
            ], 

            ['title' => 'Словообразование',
                ['link' => 'simple', 'Степени сравнения'],
                ['link' => 'simple', 'Притяжательный падеж'],
                ['link' => 'simple', 'Префиксы'],
                ['link' => 'simple', 'Суффиксы'],
                ['link' => 'simple', 'Окончание ed'],
                ['link' => 'simple', 'Окончание ing'],
                ['link' => 'simple', 'Окончание s / es'],
            ], 

            ['title' => 'Части речи',
                ['link' => 'simple', 'Прилагательные'],
                ['link' => 'simple', 'Наречия'],
                ['link' => 'simple', 'Артикль'],
                ['link' => 'simple', 'Союзы'],
                ['link' => 'simple', 'Указательные местоимения'],
                ['link' => 'simple', 'Неопределенные местоимения'],
                ['link' => 'simple', 'Междометия'],
                ['link' => 'simple', 'Исключения множественного числа'],
                ['link' => 'simple', 'Существительные'],
                ['link' => 'simple', 'Числительные'],
                ['link' => 'simple', 'Предлоги'],
                ['link' => 'simple', 'Местоимения'],
                ['link' => 'simple', 'Вопросительные слова'],
                ['link' => 'simple', 'Взаимные местоимения'],
                ['link' => 'simple', 'Относительные местоимения'],
            ], 
            ['title' => 'Модальные глаголы',
                ['link' => 'simple', 'Can и Could'],
                ['link' => 'simple', 'Dare'],
                ['link' => 'simple', 'Had better'],
                ['link' => 'simple', 'Have to'],
                ['link' => 'simple', 'May и Might'],
                ['link' => 'simple', 'Must'],
                ['link' => 'simple', 'Need'],
                ['link' => 'simple', 'Shall'],
                ['link' => 'simple', 'Should и Ought to'],
                ['link' => 'simple', 'To be to'],
                ['link' => 'simple', 'Will и Would'],
            ], 
            ['title' => 'Глаголы',
                ['link' => 'simple', 'Герундий'],
                ['link' => 'simple', 'Инфинитив'],
                ['link' => 'simple', 'Неправильные глаголы'],
                ['link' => 'simple', 'Наклонения'],
                ['link' => 'simple', 'Причастие'],
                ['link' => 'simple', 'Фразовые глаголы'],
                ['link' => 'simple', 'Сослагательное наклонение'],
                ['link' => 'simple', 'Глагол to be'],
                ['link' => 'simple', 'Виды глаголов'],
            ], 
            ['title' => 'Обороты и Конструкции',
                ['link' => 'simple', 'There is / There are'],
                ['link' => 'simple', 'To be going to'],
                ['link' => 'simple', 'Used to'],
            ], 
            ['title' => 'Начинающим', 
                ['link' => 'simple', 'Английский алфавит'],
                ['link' => 'simple', 'Правила чтения'],
                ['link' => 'simple', 'Фонетика'],
            ], 
            ['title' => 'Правописание',
                ['link' => 'simple', 'Заглавные буквы'],
                ['link' => 'simple', 'Даты и время'],
                ['link' => 'simple', 'Пунктуация'],
            ], 
            ['title' => 'Предложение', 
                ['link' => 'simple', 'Сложные предложения'],
                ['link' => 'simple', 'Условные предложения'],
                ['link' => 'simple', 'Косвенная речь'],
                ['link' => 'simple', 'Главные члены предложения'],
                ['link' => 'simple', 'Второстепенные члены предложения'],
                ['link' => 'simple', 'Простые предложения'],
                ['link' => 'simple', 'Типы вопросов'],
                ['link' => 'simple', 'Порядок слов в предложении'],
            ],
        ];
       //dd($posts);
        return view('rules.index', compact(['posts']));
    }

    public function show(Request $request, string $ruleLink) 
    {
        
       //return view('rules.renderHtml');
        $rule = Rule::query()->where('link', $ruleLink)->get();

        return view('rules.show', compact('rule'));

        
    }
}
