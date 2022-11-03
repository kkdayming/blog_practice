<?php

namespace App\Http\Repositories;

use App\Models\Photo;

class PhotoRepository
{
    private Photo $model;
    public function __construct(Photo $model)
    {
        $this->model = $model;
    }

    public function getImageables(int $photoId)
    {
        return $this->model->find($photoId)->imageable;
    }
}
