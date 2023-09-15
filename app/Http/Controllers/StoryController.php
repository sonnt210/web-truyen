<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function createStory()
    {
        return view('admin.stories.create-stories');
    }

    public function getListStories()
    {
        return view('admin.stories.list-stories');
    }
}
