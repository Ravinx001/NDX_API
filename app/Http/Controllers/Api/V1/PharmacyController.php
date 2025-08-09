<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/**
 * @tags Pharmacies
 */
class PharmacyController extends Controller
{
    /**
     * Get all pharmacies
     *
     * Retrieve all pharmacies in Sri Lanka, optionally filtered and grouped by type.
     *
     * @queryParam type string Filter by pharmacy type (government/private). Example: private
     * @queryParam city_id integer Filter by city ID. Example: 1
     * @queryParam district_id integer Filter by district ID. Example: 1
     * @queryParam province_id integer Filter by province ID. Example: 1
     * @queryParam is_24_hours boolean Filter 24-hour pharmacies. Example: true
     * @queryParam has_coordinates boolean Filter pharmacies that have latitude/longitude. Example: true
     * @queryParam group_by_type boolean Group results by type (government/private). Example: true
     * @queryParam search string Search by pharmacy name. Example: OSUSALA
     * @queryParam per_page integer Number of results per page (default: 50). Example: 20
     *
     * @response 200 {
     *   "data": {
     *     "government": [
     *       {
     *         "id": 1,
     *         "name": "OSUSALA - Colombo General Hospital",
     *         "type": "government",
     *         "address": "Regent Street, Colombo 08",
     *         "phone": "+94112691111",
     *         "opening_time": "08:00:00",
     *         "closing_time": "20:00:00",
     *         "is_24_hours": false,
     *         "city": {
     *           "id": 1,
     *           "name_en": "Colombo",
     *           "district": {
     *             "id": 1,
     *             "name_en": "Colombo",
     *             "province": {
     *               "id": 1,
     *               "name_en": "Western Province"
     *             }
     *           }
     *         }
     *       }
     *     ],
     *     "private": []
     *   }
     * }
     */
    public function index(Request $request): JsonResponse
    {
        $query = Pharmacy::with(['city.district.province']);

        // Apply filters
        if ($request->has('type')) {
            $query->where('type', $request->type);
        }

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

        if ($request->boolean('is_24_hours')) {
            $query->where('is_24_hours', true);
        }

        if ($request->boolean('has_coordinates')) {
            $query->whereNotNull('latitude')
                ->whereNotNull('longitude');
        }

        if ($request->has('search')) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%");
        }

        // Handle pagination vs grouping
        if ($request->boolean('group_by_type')) {
            $pharmacies = $query->get();
            $grouped = $pharmacies->groupBy('type');

            return response()->json([
                'data' => [
                    'government' => $grouped->get('government', []),
                    'private' => $grouped->get('private', [])
                ]
            ]);
        }

        $perPage = $request->get('per_page', 50);
        $pharmacies = $query->orderBy('name')->paginate($perPage);

        return response()->json($pharmacies);
    }

    /**
     * Get a specific pharmacy
     */
    public function show(Pharmacy $pharmacy): JsonResponse
    {
        $pharmacy->load(['city.district.province']);
        return response()->json(['data' => $pharmacy]);
    }
}
