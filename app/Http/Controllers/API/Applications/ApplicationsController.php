<?php

namespace App\Http\Controllers\API\Applications;

use App\Http\Controllers\API\Applications\Requests\CreateApplicationRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Applications\ApplicationsService;

class ApplicationsController extends Controller
{
    /**
     * applications service
     * 
     * @var ApplicationsService
     */
    private $applicationsService;

    /**
     * constructor
     * 
     * @param ApplicationService
     * @return void
     */
    public function __construct(
        ApplicationsService $applicationsService
    )
    {
        $this->applicationsService = $applicationsService;
    }

    /**
     * Create new application
     * 
     * @param CreateApplicationRequest
     * @return JsonResponse
     */
    public function create(CreateApplicationRequest $request): JsonResponse
    {
        return response()->json(
            $this->applicationsService
                ->create($request->all())
        );
    }
}
