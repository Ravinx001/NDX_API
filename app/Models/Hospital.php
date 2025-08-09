<?php
// app/Models/Hospital.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'address',
        'phone',
        'services',
        'bed_count',
        'latitude',
        'longitude',
        'city_id'
    ];

    protected $casts = [
        'services' => 'array',
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function district()
    {
        return $this->hasOneThrough(District::class, City::class, 'id', 'id', 'city_id', 'district_id');
    }

    public function province()
    {
        return $this->hasOneThroughDeep(Province::class, [City::class, District::class]);
    }
}
