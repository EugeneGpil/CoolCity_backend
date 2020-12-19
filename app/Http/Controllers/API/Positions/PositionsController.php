<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\Positions;

use App\Http\Controllers\API\Positions\Requests\GetPositionsRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\API\Positions\Resources\PositionsResource;
use App\Services\Positions\PositionsService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PositionsController extends Controller
{
    /**
     * Positions service
     * 
     * @var PositionsService $positionsService
     */
    private $positionsService;

    /**
     * Constructor
     * 
     * @var PositionsService $positionsService
     * @return void
     */
    public function __construct(
        PositionsService $positionsService
    )
    {
        $this->positionsService = $positionsService;
    }

    /**
     * Get positions
     * 
     * @var GetPositionsRequest $getPositionsRequest
     */
    public function getPositions(GetPositionsRequest $request): JsonResponse
    {
        $data = $this->positionsService->all($request->all());

        if ($data['status'] === false) {
            return response()->json($data);
        }

        return response()->json([
            'statsu' => $data['status'],
            'payload' => PositionsResource::collection(
                $data['payload']
            )
        ]);
    }
}
