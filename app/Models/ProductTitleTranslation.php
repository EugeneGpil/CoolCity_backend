<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ProductTitleTranslation
 *
 * @property int $id
 * @property int $product_id
 * @property string $language
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTitleTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTitleTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTitleTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTitleTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTitleTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTitleTranslation whereLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTitleTranslation whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTitleTranslation whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductTitleTranslation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ProductTitleTranslation extends Model
{
    use HasFactory;
}
