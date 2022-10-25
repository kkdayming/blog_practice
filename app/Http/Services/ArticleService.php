<?php

namespace App\Http\Services;

use App\Http\Repositories\ArticleRepository;

class ArticleService
{
    public function __construct(ArticleRepository $repo)
    {
        $this->repo = $repo;
    }

    public function getLatest()
    {
        return $this->repo->getLatestWithVisible();
    }

    public function create($formField)
    {
        $this->repo->create($formField);
    }

    public function delete($article)
    {
        $this->repo->delete($article);
    }

    public function update($formFields)
    {
        $this->repo->update($formFields);
    }
}
