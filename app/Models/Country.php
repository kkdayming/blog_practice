<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'countries';

    public function articles()
    {
        return $this->hasManyThrough('App\Models\Article', 'App\Models\User', 'countries_id', 'user_id');
    }
}
