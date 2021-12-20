<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\TopPage
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TopPageFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|TopPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TopPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TopPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|TopPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopPage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class TopPage extends Model
{
    use HasFactory;
}
