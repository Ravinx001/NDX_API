<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\{
    ProvinceController,
    DistrictController,
    CityController,
    GramaNiladhariController,
    PostalCodeController,
    PradeshiyaSabaController,
    PoliceStationController,
    HospitalController,
    PharmacyController
};

Route::prefix('v1')->group(function () {
    // Administrative divisions
    Route::apiResource('provinces', ProvinceController::class)->only(['index', 'show']);
    Route::apiResource('districts', DistrictController::class)->only(['index', 'show']);
    Route::apiResource('cities', CityController::class)->only(['index', 'show']);
    Route::apiResource('grama-niladhari', GramaNiladhariController::class)->only(['index', 'show']);
    Route::apiResource('postal-codes', PostalCodeController::class)->only(['index', 'show']);
    Route::apiResource('pradeshiya-sabas', PradeshiyaSabaController::class)->only(['index', 'show']);

    // Institutions
    Route::apiResource('police-stations', PoliceStationController::class)->only(['index', 'show']);
    Route::apiResource('hospitals', HospitalController::class)->only(['index', 'show']);
    Route::apiResource('pharmacies', PharmacyController::class)->only(['index', 'show']);
});
