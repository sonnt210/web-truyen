<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreStory extends Model
{
    use HasFactory;

    protected $table = 'genre_stories';
    public $timestamps = true;

    protected $guarded = [];
}
