<?php

namespace App\Http\Repositories;

use App\Models\Tag;

class TagRepository
{
    private Tag $model;
    public function __construct(Tag $model)
    {
        $this->model = $model;
    }

    public function getTaggable(int $tagId)
    {
        return $this->model->find($tagId)->taggable; 
    }
}
