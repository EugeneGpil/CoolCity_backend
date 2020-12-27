<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Position extends Model
{
    use HasFactory;

    /**
     * Get pictures of position
     * 
     * @return HasMany
     */
    public function pictures(): HasMany
    {
        return $this->hasMany(Picture::class);
    }

    /**
     * Get size of position
     * 
     * @return BelongsTo
     */
    public function size(): BelongsTo
    {
        return $this->BelongsTo(Size::class);
    }

    /**
     * Get product of position
     * 
     * @return BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->BelongsTo(Product::class);
    }

    /**
     * Get first color
     * 
     * @return BelongsTo
     */
    public function firstColor(): BelongsTo
    {
        return $this->belongsTo(Color::class, 'color_1_id');
    }

    /**
     * Get second color
     * 
     * @return BelongsTo
     */
    public function secondColor(): BelongsTo
    {
        return $this->belongsTo(Color::class, 'color_2_id');
    }
}
