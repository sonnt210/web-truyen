<?php

namespace App\Services;

use App\Models\Story;
use App\Repositories\StoryRepository;

class StoryServices
{
    /* @var StoryRepository */
    private $story_repository;

    public function __construct(StoryRepository $story_repository)
    {
        $this->story_repository = $story_repository;
    }

    public function createStory($data): Story
    {
        return $this->story_repository->createStory($data);
    }
}
