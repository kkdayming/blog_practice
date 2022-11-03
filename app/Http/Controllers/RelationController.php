<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\RelationService;

class RelationController extends Controller
{
    private RelationService $relationService;
    public function __construct(RelationService $relationService)
    {
        $this->relationService = $relationService;
    }

    public function countryPosts(Request $request)
    {   
        $countryId = $request->query('countryId');
        return $this->relationService->getSpecificCountryPost($countryId);
    }

    // poly one to many
    public function userPhotos(Request $request)
    {
        $userId = $request->query('userId');
        return $this->relationService->getUserPhotoIds($userId); 
    }

    public function articlePhotos(Request $request)
    {
        $articleId = $request->query('articleId');
        return $this->relationService->getArticlePhotoIds($articleId);
    }

    public function photoImagables(Request $request)
    {   
        $photoId = $request->query('photoId');
        return $this->relationService->getPhotoImagables($photoId);
    }

    // poly many to many
    public function articleTags(Request $request)
    {
        $articleId = $request->query('articleId');
        return $this->relationService->getArticleTags($articleId); 
    }

    public function videoTags(Request $request)
    {
        $videoId = $request->query('videoId');
        return $this->relationService->getVideoTags($videoId);
    }

    public function tagTaggable(Request $request)
    {
        $tagId = $request->query('tagId');
        return $this->relationService->getVideoTags($tagId);
    }
}
