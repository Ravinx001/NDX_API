<?php
// app/Models/City.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en',
        'name_si',
        'name_ta',
        'latitude',
        'longitude',
        'district_id'
    ];

    protected $casts = [
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
    ];

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class);
    }

    public function province()
    {
        return $this->hasOneThrough(Province::class, District::class, 'id', 'id', 'district_id', 'province_id');
    }

    public function postalCodes(): HasMany
    {
        return $this->hasMany(PostalCode::class);
    }

    public function policeStations(): HasMany
    {
        return $this->hasMany(PoliceStation::class);
    }

    public function hospitals(): HasMany
    {
        return $this->hasMany(Hospital::class);
    }

    public function pharmacies(): HasMany
    {
        return $this->hasMany(Pharmacy::class);
    }
}
