<?php

namespace App\Http\Repositories;

use App\Models\Article;


class ArticleRepository
{
    private Article $model;
    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    public function getLatestWithVisible()
    {
        return $this->model->latest()->where('visible', '=', '1')->get();
    }

    public function getByUserId(int $id)
    {
        return $this->model->where('user_id', '=', $id)->get();
    }

    public function create($formField)
    {
        $this->model->create($formField);
    }

    public function update($formFields)
    {
        $this->model->where('id', $formFields['id'])->update($formFields);
    }

    public function delete($article)
    {
        $this->model->where('id', $article->id)->delete();
    }
}
