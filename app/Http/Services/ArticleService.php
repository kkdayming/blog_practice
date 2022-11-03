<?php

namespace App\Http\Services;

use App\Jobs\SearchArticleJob;
use App\Http\Repositories\ArticleRepository;
use Illuminate\Support\Facades\Redis;

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

    public function search(string $search): int
    {
        $searchId = time();
        
        Redis::executeRaw(['set', "search:${searchId}", 'pending']);
        Redis::executeRaw(['EXPIRE', "search:${searchId}", config('cache.search.expire_time')]);

        SearchArticleJob::dispatch($searchId, $search);
        return $searchId;
    }

    public function searchResult(int $searchId)
    {
        $result = "";
        foreach (range(1, config('cache.search.polling_tries')) as $index) {
            $result = Redis::executeRaw(['get', "search:${searchId}"]);
            if ($result !== "pending") return $result;
            sleep(config('cache.search.polling_interval_time'));
        }
        return $result;
    }
}
