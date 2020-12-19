<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\Positions\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PositionsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'color' => $this->color,
            'in_stoke' => $this->in_stoke,
            'sell_price' => $this->sell_price,
            'pictures' => PicturesResource::collection($this->pictures),
            'size' => $this->size->name,
            'title' => $this->product->title,
        ];
    }
}
