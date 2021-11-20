<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Position
 *
 * @property int $id
 * @property int $product_id
 * @property int $size_id
 * @property int $color_1_id
 * @property int|null $color_2_id
 * @property int $in_stoke
 * @property float $purchase_price
 * @property float $sell_price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Color $firstColor
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Picture[] $pictures
 * @property-read int|null $pictures_count
 * @property-read \App\Models\Product $product
 * @property-read \App\Models\Color|null $secondColor
 * @property-read \App\Models\Size $size
 * @method static \Illuminate\Database\Eloquent\Builder|Position newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Position query()
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereColor1Id($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereColor2Id($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereInStoke($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position wherePurchasePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereSellPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereSizeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Position whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
