<?php

declare(strict_types = 1);

namespace App\Services\Positions;

use App\Services\Positions\Repositories\PositionsRepositoryInterface;

class PositionsService
{
    /**
     * Positions repository
     * 
     * @var PositionsRepositoryInterface
     */
    private $positionsRepository;

    /**
     * Positions service constructor
     * 
     * @param PositionRepositoryInterface
     * @return void
     */
    public function __construct(
        PositionsRepositoryInterface $positionsRepository
    )
    {
        $this->positionsRepository = $positionsRepository;
    }
    
    /**
     * Get all positions
     * 
     * @var array $params
     * @return array
     */
    public function all(array $params): array
    {
        if (!isset($params['language'])) {
            $params['language'] = 'th';
        }

        \App::setlocale($params['language']);

        if (strcmp(($params['only_in_stoke'] ?? 'false'), 'true') === 0) {
            $params['only_in_stoke'] = true;

        } else {
            $params['only_in_stoke'] = false;
        }

        if ($params['only_in_stoke'] === true) {

            return [
                'status' => false,
                'message' => __('positions.coming_soon'),
            ];

        } else {

            return [
                'status' => true,
                'payload' => $this->positionsRepository
                    ->all()
            ];
        }
    }

    /**
     * Get one position in collection by id
     * 
     * @param int $id
     * @return array
     */
    public function find(int $id): array
    {
        return [
            'status' => true,
            'payload' => $this->positionsRepository
                ->find($id),
        ];
    }
}
