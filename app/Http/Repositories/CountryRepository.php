<?php

namespace App\Http\Repositories;

use App\Models\Country;

class CountryRepository
{
    private Country $model;
    public function __construct(Country $model)
    {
        $this->model = $model;
    }

    public function getPost(int $countryId = 1)
    {
        return $this->model->find($countryId)->articles; 
    }
}
