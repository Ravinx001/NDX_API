<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GramaNiladhariDivision extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'latitude' => 'decimal:8',
        'longitude' => 'decimal:8',
    ];

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function province()
    {
        return $this->hasOneThrough(Province::class, District::class);
    }

}
