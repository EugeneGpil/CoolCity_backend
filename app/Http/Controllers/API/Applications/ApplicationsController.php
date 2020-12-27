<?php

namespace App\Http\Controllers\API\Applications;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicationsController extends Controller
{
    /**
     * Create new application
     * 
     * @param Request
     */
    public function create(Request $request): JsonResponse
    {
        return response()->json([
            'status' => true,
        ]);
    }
}
