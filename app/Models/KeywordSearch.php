<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeywordSearch extends Model
{
    use HasFactory;

    protected $table = 'keyword_searches';

    protected $fillable = [
        'query',
        'keywords'
    ];

    protected $casts = [
        'keywords' => 'array',
    ];
}
