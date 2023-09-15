<?php

namespace App\Services;

use App\Repositories\GenreStoryRepository;

class GenreStoryService
{
    /** @var GenreStoryRepository */
    private $genre_store_repository;

    public function __construct(GenreStoryRepository $genre_store_repository)
    {
        $this->genre_store_repository = $genre_store_repository;
    }

    public function storeGenre($data)
    {
        return $this->genre_store_repository->createGenreStory($data);
    }

    public function getListGenre()
    {
        return $this->genre_store_repository->getListGenre();
    }
}
