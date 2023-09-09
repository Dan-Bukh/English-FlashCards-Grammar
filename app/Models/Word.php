<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    public $incrementing = false;
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'title',
        'title_translate',
        'text',
        'text_translate',
        'link',
        'author_img',
    ];


    protected $casts = [
        'id' => 'string',
        'title' => 'string',
        'title_translate' => 'string',
        'text' => 'string',
        'text_translate' => 'string',
        'link' => 'string',
        'author_img' => 'string',
    ];
}
