<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $table = 'stories';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $guarded = [];

    public function genreStory()
    {
        return $this->belongsTo(GenreStory::class, 'genre_id', 'id');
    }
}
