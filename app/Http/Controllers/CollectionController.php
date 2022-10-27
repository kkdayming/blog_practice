<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class CollectionController extends Controller
{
    private $posts;

    public function __construct()
    {
        $json = Http::get(env('COLLECTION_URL'))
            ->json();

        $this->posts = collect($json['data']['children']);
    }

    public function index()
    {
        return $this->posts;
    }

    public function filter()
    {
        return $this->posts->filter(function ($post, $key) {
            return $post['data']['over_18'] == 'false';
        });
    }

    public function pluck()
    {
        return $this->posts->filter(function ($post, $key) {
            return Str::contains($post['data']['url'], 'i.redd.it');
        })->pluck('data.url')
            ->all();
    }

    public function contains()
    {
        if (!$this->posts->contains('data.post_hint' !== 'image')) {
            return false;
        }
        return redirect('api/collection/pluck');
    }

    public function groupby()
    {
        return $this->posts->groupBy('data.post_hint')->toArray();
    }

    public function sortby()
    {
        return $this->posts
            ->sortBy('data.num_comments')
            ->values() // resign index
            ->pluck('data.num_comments', 'data.title');
    }

    public function partition()
    {
        list($adultPosts, $commonPosts) = $this->posts->partition(function ($post) {
            return $post['data']['over_18'];
        });

        return ['adult posts' => $adultPosts, 'common posts' => $commonPosts];
    }


    public function reject()
    {
        return $this->posts->reject(function ($post) {
            return $post['data']['ups'] < 10000;
        })->pluck('data.title', 'data.ups');;
    }

    public function wherein()
    {
        return $this->posts->whereIn('data.post_hint', ['link']);
    }

    public function chunk()
    {
        return $this->posts->pluck('data.title')->chunk(2);
    }

    public function count()
    {
        return $this->posts->count();
    }

    public function first()
    {
        return $this->posts->first(function ($post) {
            return $post['data']['ups'] > 10000;
        });
    }

    public function firstwhere()
    {
        return $this->posts->firstWhere('data.ups', '>', 1000);
    }

    public function tap()
    {
        return $this->posts
            ->sortBy('data.num_comments')
            ->values() // resign index
            ->tap(function ($collection) {
                Log::info("Total: " . $collection->count() . ", Ids: " . $collection->pluck('data.num_comments'));
            })
            ->pluck('data.num_comments', 'data.title');
    }
}
