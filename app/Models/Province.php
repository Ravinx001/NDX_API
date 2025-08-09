<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Province extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_si',
        'name_ta',
        'code'
    ];

    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }

    public function cities(): HasManyThrough
    {
        return $this->hasManyThrough(City::class, District::class);
    }
}
