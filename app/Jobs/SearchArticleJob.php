<?php

namespace App\Jobs;

use App\Models\Article;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Redis;


class SearchArticleJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private int $searchId;
    private string $search;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $searchId, string $search)
    {
        $this->searchId = $searchId;
        $this->search = $search;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        sleep(30); # TODO: delay simulate , need to be remove.

        $result = Article::where('title', 'like', '%' . $this->search . '%')
            ->orWhere('description', 'like', '%' . $this->search . '%')->get();
        Redis::executeRaw(['set', "search:{$this->searchId}", $result]);
        Redis::executeRaw(['EXPIRE', "search:{$this->searchId}", config('cache.search.expire_time')]);
    }
}
