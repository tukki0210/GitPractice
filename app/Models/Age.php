<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Age
 *
 * @property int $id
 * @property string $age
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\AgeFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Age newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Age newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Age query()
 * @method static \Illuminate\Database\Eloquent\Builder|Age whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Age whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Age whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Age whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Age extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','age'
    ];
}
