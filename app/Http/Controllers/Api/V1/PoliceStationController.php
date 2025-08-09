<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\PoliceStation;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/**
 * @tags Police Stations
 */
class PoliceStationController extends Controller
{
    /**
     * Get all police stations
     *
     * Retrieve all police stations in Sri Lanka with their location information.
     *
     * @queryParam city_id integer Filter by city ID. Example: 1
     * @queryParam district_id integer Filter by district ID. Example: 1
     * @queryParam province_id integer Filter by province ID. Example: 1
     * @queryParam has_coordinates boolean Filter stations that have latitude/longitude. Example: true
     * @queryParam search string Search by station name. Example: Fort
     * @queryParam per_page integer Number of results per page (default: 50). Example: 20
     *
     * @response 200 {
     *   "data": [
     *     {
     *       "id": 1,
     *       "name": "Fort Police Station",
     *       "address": "Bristol Street, Colombo 01",
     *       "phone": "+94112326771",
     *       "latitude": "6.9344",
     *       "longitude": "79.8428",
     *       "city": {
     *         "id": 1,
     *         "name_en": "Colombo",
     *         "district": {
     *           "id": 1,
     *           "name_en": "Colombo",
     *           "province": {
     *             "id": 1,
     *             "name_en": "Western Province"
     *           }
     *         }
     *       }
     *     }
     *   ]
     * }
     */
    public function index(Request $request): JsonResponse
    {
        $query = PoliceStation::with(['city.district.province']);

        // Filters
        if ($request->has('city_id')) {
            $query->where('city_id', $request->city_id);
        }

        if ($request->has('district_id')) {
            $query->whereHas('city', function ($q) use ($request) {
                $q->where('district_id', $request->district_id);
            });
        }

        if ($request->has('province_id')) {
            $query->whereHas('city.district', function ($q) use ($request) {
                $q->where('province_id', $request->province_id);
            });
        }

        if ($request->boolean('has_coordinates')) {
            $query->whereNotNull('latitude')
                ->whereNotNull('longitude');
        }

        if ($request->has('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%");
        }

        $perPage = $request->get('per_page', 50);
        $policeStations = $query->orderBy('name')->paginate($perPage);

        return response()->json($policeStations);
    }

    /**
     * Get a specific police station
     */
    public function show(PoliceStation $policeStation): JsonResponse
    {
        $policeStation->load(['city.district.province']);
        return response()->json(['data' => $policeStation]);
    }
}
