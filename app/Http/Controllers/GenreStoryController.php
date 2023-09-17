<?php

namespace App\Http\Controllers;

use App\Http\Requests\GS01Request;
use App\Models\GenreStory;
use Illuminate\Http\Request;
use App\Services\GenreStoryService;
use Illuminate\Http\Response;

class GenreStoryController extends Controller
{
    /** @var GenreStoryService */
    private $genre_store_service;

    public function __construct(GenreStoryService $genre_store_service)
    {
        $this->genre_store_service = $genre_store_service;
    }

    public function createGenreStory()
    {
        return view('admin.genre-stories.genre-create');
    }

    public function getListGenreStories()
    {
        $list_genres = $this->genre_store_service->getListGenre();
        return view('admin.genre-stories.list-genre')->with(compact('list_genres'));
    }

    public function storeGenreStory(GS01Request $request)
    {
        try {
            $data = $request->all();
            $this->genre_store_service->storeGenre($data);
            return redirect()->back()->with('status', 'Thêm danh mục thành công!');
        } catch (\Exception $e) {
            return response()->json([
                'result'  => false,
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function deleteGenreStory($id)
    {
        try {
            GenreStory::find($id)->delete();
            return redirect()->back()->with('status', 'Xoá danh mục thành công!');
        } catch (\Exception $e) {
            return response()->json([
                'result'  => false,
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function editGenreStory($id)
    {
        try {
            $genre = GenreStory::find($id);
            return view('admin.genre-stories.edit-genre')->with(compact('genre'));
        } catch (\Exception $e) {
            return response()->json([
                'result'  => false,
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function updateGenreStory(Request $request, $id)
    {
        try {
            $input                    = $request->all();
            $genre                    = GenreStory::find($id);
            $genre->genre_name        = $input['genre_name'];
            $genre->genre_slug        = $input['genre_slug'];
            $genre->genre_description = $input['genre_description'];
            $genre->is_active         = $input['is_active'];
            $genre->save();
            return redirect()->back()->with('status', 'Cập nhật danh mục thành công!');
        } catch (\Exception $e) {
            return response()->json([
                'result'  => false,
                'message' => $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
