<?php

declare(strict_types = 1);

namespace App\Services\Products;

use App\Services\Products\Repositories\ProductsRepositoryInterface;

class ProductsService 
{
    /**
     * Product repository
     * 
     * @var ProductsRepositoryInterface
     */
    private $productsRepository;

    /**
     * Constructor
     * 
     * @param ProductsRepositoryInterface $productsRepositoryInterface
     */
    public function __construct(
        ProductsRepositoryInterface $productsRepository
    ) {
        $this->productRepository = $productsRepository;
    }

    /**
     * Get all ids
     * 
     * @return array
     */
    public function getAllIds(): array
    {
        return [
            'status' => true,
            'payload' => $this->productRepository
                ->getAllIds()
                ->toArray()
        ];
    }
}