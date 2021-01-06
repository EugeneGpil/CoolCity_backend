<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\Products\ProductsService;

class ProductsController extends Controller
{
    /**
     * Products service
     * 
     * @var ProductsService
     */
    private $productsService;

    /**
     * Constructor
     * 
     * @param ProductsService $productsService
     */
    public function __construct(
        ProductsService $productsService
    ) {
        $this->productsService = $productsService;
    }

    /**
     * Get all positions ids
     * 
     * @return JsonResponse
     */
    public function getAllIds(): JsonResponse
    {
        return response()->json(
            $this->productsService
                ->getAllIds()
        );
    }
}
