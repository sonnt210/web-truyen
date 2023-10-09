<?php

namespace App\Http\Controllers;

use App\Services\GenreStoryService;
use App\Services\StoryServices;

class IndexController extends Controller
{
    /** @var GenreStoryService */
    private $genre_story_service;

    /** @var StoryServices */
    private $story_service;

    public function __construct(GenreStoryService $genre_story_service, StoryServices $story_service)
    {
        $this->genre_story_service = $genre_story_service;
        $this->story_service = $story_service;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function home()
    {
        $genre_stories = $this->genre_story_service->getListGenre();
        $list_stories = $this->story_service->getListStoriesActive();

        return view('pages.home')->with(compact('genre_stories', 'list_stories'));
    }

    public function storyDetail($id)
    {
        $genre_stories = $this->genre_story_service->getListGenre();
        return view('pages.story_detail')->with(compact('genre_stories'));
    }

    public function listStoriesOfGenre($slug)
    {
        return true;
    }
}
