<?php

namespace App\Repositories;

use App\Models\Story;

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

        $path            = 'public/uploads/story_images';
        $image           = $data['image'];
        $full_image_name = $image->getClientOriginalName();
        $image_name      = current(explode('.', $full_image_name));
        $new_image       = $image_name . rand(0, 99) . '.' . $image->getClientOriginalExtension();
        $image->move($path, $new_image);
        $new_story->image = $new_image;

        $new_story->save();
        return $new_story;
    }
}
