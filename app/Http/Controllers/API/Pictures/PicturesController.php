<?php

namespace App\Http\Controllers\API\Pictures;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\Pictures\PicturesService;

class PicturesController extends Controller
{
    /**
     * Pictures service
     * 
     * @var PicturesService
     */
    private $picturesService;

    /**
     * Constructor
     */
    public function __construct(
        PicturesService $picturesService
    ) {
        $this->picturesService = $picturesService;
    }

    /**
     * Get first existign picuter url
     * 
     * @return JsonResponse
     */
    public function getFirstExistingPictureUrl(): JsonResponse
    {
        return response()->json(
            $this->picturesService
                ->getFirstExistingPictureUrl()
        );
    }
}
