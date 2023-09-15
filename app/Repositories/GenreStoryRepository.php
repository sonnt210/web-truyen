<?php

namespace App\Repositories;

use App\Models\GenreStory;

class GenreStoryRepository
{
    public function createGenreStory($data)
    {
        $genre_story = new GenreStory();
        $genre_story->genre_name = $data['genre_name'];
        $genre_story->genre_slug = $data['genre_slug'];
        $genre_story->genre_description = $data['genre_description'];
        $genre_story->is_active = $data['is_active'];
        $genre_story->save();
        return $genre_story;
    }

    public function getListGenre()
    {
        return GenreStory::orderBy('genre_name', 'ASC')->get();
    }
}
