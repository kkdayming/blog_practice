<?php

namespace App\Http\Services;

use App\Http\Repositories\CountryRepository;
use App\Http\Repositories\UserRepository;
use App\Http\Repositories\ArticleRepository;
use App\Http\Repositories\PhotoRepository;
use App\Http\Repositories\VideoRepository;
use App\Http\Repositories\TagRepository;

class RelationService
{
    private CountryRepository $countryRepo;
    private UserRepository $userRepo;
    private ArticleRepository $articleRepo;
    private PhotoRepository $photoRepo;
    private VideoRepository $videoRepo;
    private TagRepository $tagRepo;

    public function __construct(
        CountryRepository $countryRepo,
        UserRepository $userRepo,
        ArticleRepository $articleRepo,
        PhotoRepository $photoRepo,
        VideoRepository $videoRepo,
        TagRepository $tagRepo
    ) {
        $this->countryRepo = $countryRepo;
        $this->userRepo = $userRepo;
        $this->articleRepo = $articleRepo;
        $this->photoRepo = $photoRepo;
        $this->videoRepo = $videoRepo;
        $this->tagRepo = $tagRepo;
    }

    public function getSpecificCountryPost(int $countryId){
        return json_decode($this->countryRepo->getPost($countryId));
    }

    public function getUserPhotoIds(int $userId)
    {
        return json_decode($this->userRepo->getPhotoIds($userId));
    }

    public function getArticlePhotoIds(int $articleId)
    {
        return json_decode($this->articleRepo->getPhotoIds($articleId));
    }

    public function getPhotoImagables(int $photoId)
    {
        return json_decode($this->photoRepo->getImageables($photoId));
    }

    public function getArticleTags(int $articleId)
    {
        return $this->articleRepo->getTags($articleId);
    }

    public function getVideoTags(int $videoId)
    {
        return $this->videoRepo->getTags($videoId);
    }

    public function getTaggable(int $tagId)
    {
        return $this->tagRepo->getTaggable($tagId);
    }
}
