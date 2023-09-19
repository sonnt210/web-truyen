<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoryRequest;
use App\Http\Requests\UpdateStoryRequest;
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
        StoryServices $story_service
    )
    {
        $this->genre_store_service = $genre_store_service;
        $this->story_service       = $story_service;
    }

    public function createStory()
    {
        $list_genres = $this->genre_store_service->getListGenre();
        return view('admin.stories.create-stories')->with(compact('list_genres'));
    }

    public function getListStories()
    {
        $list_stories = $this->story_service->getListStories();
        return view('admin.stories.list-stories')->with(compact('list_stories'));
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

    public function deleteStory($id)
    {
        try {
            $this->story_service->deleteStory($id);
            return redirect()->back()->with('status', 'Xoá truyện thành công!');
        } catch (\Exception $e) {
            return response()->json([
                'result'  => false,
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function editStory($id)
    {
        try {
            $story       = $this->story_service->editStory($id);
            $list_genres = $this->genre_store_service->getListGenre();
            return view('admin.stories.edit-story')->with(compact('story', 'list_genres'));
        } catch (\Exception $e) {
            return response()->json([
                'result'  => false,
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function updateStory(UpdateStoryRequest $request, $id)
    {
        try {
            $story             = Story::find($id);
            $story->story_name = $request['story_name'];
            $story->story_slug = $request['story_slug'];
            $story->summary    = $request['summary'];
            $story->genre_id   = $request['genre_id'];
            $story->active     = $request['active'];
            $get_image         = $request->image;
            if ($get_image) {
                $image_path = 'uploads/story_images/' . $story->image;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
                $path            = 'uploads/story_images';
                $image           = $request['image'];
                $full_image_name = $image->getClientOriginalName();
                $image_name      = current(explode('.', $full_image_name));
                $new_image       = $image_name . rand(0, 99) . '.' . $image->getClientOriginalExtension();
                $image->move($path, $new_image);
                $story->image = $new_image;
            }
            $story->save();
            return redirect()->back()->with('status', 'Cập nhật truyện thành công');
        } catch (\Exception $e) {
            return response()->json([
                'result'  => false,
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
