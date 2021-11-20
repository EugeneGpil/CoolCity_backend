<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Application
 *
 * @property int $id
 * @property int $position_id
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $postcode
 * @property string|null $address
 * @property string|null $email
 * @property string|null $facebook
 * @property string|null $line
 * @property string|null $whatsapp
 * @property string|null $telegram
 * @property string|null $vk
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Application newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application query()
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereLine($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application wherePositionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application wherePostcode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereTelegram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereVk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereWhatsapp($value)
 * @mixin \Eloquent
 */
class Application extends Model
{
    use HasFactory;
}
