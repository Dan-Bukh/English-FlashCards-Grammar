<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    //use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'link',
        'content',
    ];

    protected $casts = [
        'title' => 'string',
        'link' => 'string',
        'content' => 'string',
    ];

    // protected $table = [
    //     'table' => 'rules',
    // ];
}
