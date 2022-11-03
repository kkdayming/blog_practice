<?php

namespace App\Http\Repositories;

use App\Models\Video;

class VideoRepository
{
    private Video $model;
    public function __construct(Video $model)
    {
        $this->model = $model;
    }

    public function getTags(int $videoId)
    {
        return  $this->model->find($videoId)->tags; 
    }
}
