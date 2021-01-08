<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    /**
     * Get translations of product title
     * 
     * @return HasMany
     */
    public function titleTranslations(): HasMany
    {
        return $this->hasMany(ProductTitleTranslation::class);
    }
}
