<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoryRequest;
use App\Models\Story;
use App\Services\GenreStoryService;
use App\Services\StoryServices;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoryController extends Controller
{

    /** @var GenreStoryService */
    private $genre_store_service;

    /** @var StoryServices */
    private $story_service;

    public function __construct(
        GenreStoryService $genre_store_service,
        StoryServices  $story_service
    )
    {
        $this->genre_store_service = $genre_store_service;
        $this->story_service = $story_service;
    }

    public function createStory()
    {
        $list_genres = $this->genre_store_service->getListGenre();
        return view('admin.stories.create-stories')->with(compact('list_genres'));
    }

    public function getListStories()
    {
        return view('admin.stories.list-stories');
    }

    /*
     * create new story
     */
    public function storeStory(StoryRequest $request)
    {
        try {
            $input = $request->all();
            $this->story_service->createStory($input);
            return redirect()->back()->with('status', 'Thêm truyện thành công!');
        } catch (\Exception $e) {
            return response()->json([
                'result'  => false,
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
