<?php

namespace App\Http\Repositories;

use App\Models\Article;


class ArticleRepository
{
    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    public function getLatestWithVisible()
    {
        return $this->model->latest()->where('visible', '=', '1')->get();
    }

    public function getByUserId()
    {
        return $this->model->where('user_id',)->get(); // TODO: fix
    }

    public function create($formField)
    {
        $this->model->create($formField);
    }

    public function update($formFields)
    {
        $this->model->update($formFields);
    }

    public function delete($article)
    {
        $this->model->delete($article);
    }
}
