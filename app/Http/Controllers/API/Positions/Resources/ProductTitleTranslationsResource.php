<?php

declare(strict_types = 1);

namespace App\Http\Controllers\API\Positions\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductTitleTranslationsResource extends JsonResource
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
            'language' => $this->language,
            'title' => $this->title,
        ];
    }
}
