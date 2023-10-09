<?php

namespace App\Repositories;

use App\Models\Story;
use Illuminate\Database\Eloquent\Collection;

class StoryRepository
{

    /*
     * @param  array $data
     * @return Story
     */
    public function createStory($data): Story
    {
        $new_story             = new Story();
        $new_story->story_name = $data['story_name'];
        $new_story->story_slug = $data['story_slug'];
        $new_story->summary    = $data['summary'];
        $new_story->genre_id   = $data['genre_id'];
        $new_story->active     = $data['active'];

        $path            = 'storage/story_images';
        $image           = $data['image'];
        $full_image_name = $image->getClientOriginalName();
        $image_name      = current(explode('.', $full_image_name));
        $new_image       = $image_name . rand(0, 99) . '.' . $image->getClientOriginalExtension();
        $image->move($path, $new_image);
        $new_story->image = $new_image;

        $new_story->save();
        return $new_story;
    }

    public function getListStories(): Collection
    {
        $result = Story::with('genreStory')->orderBy('id', 'DESC')->get();
        return $result;
    }

    /**
     * @return Collection
     */
    public function getListStoriesActive()
    {
        $result = Story::with('genreStory')
            ->orderBy('id', 'DESC')
            ->where('active', 0)->get();
        return $result;
    }

    public function editStory($id)
    {
        return Story::find($id);
    }

    public function deleteStory($id)
    {
        $story      = Story::find($id);
        $image_path = 'storage/story_images/' . $story->image;
        if (file_exists($image_path)) {
            unlink($image_path);
        }
        return Story::find($id)->delete();
    }
}
