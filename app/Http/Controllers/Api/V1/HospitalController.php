<?php
namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/**
 * @tags Hospitals
 */
class HospitalController extends Controller
{
    /**
     * Get all hospitals
     *
     * Retrieve all hospitals in Sri Lanka, optionally filtered and grouped by type.
     *
     * @queryParam type string Filter by hospital type (government/private). Example: government
     * @queryParam city_id integer Filter by city ID. Example: 1
     * @queryParam district_id integer Filter by district ID. Example: 1
     * @queryParam province_id integer Filter by province ID. Example: 1
     * @queryParam group_by_type boolean Group results by type (government/private). Example: true
     *
     * @response 200 {
     *   "data": {
     *     "government": [
     *       {
     *         "id": 1,
     *         "name": "Colombo General Hospital",
     *         "type": "government",
     *         "address": "Regent Street, Colombo 08",
     *         "phone": "+94112691111",
     *         "services": ["Emergency", "Surgery", "Cardiology"],
     *         "bed_count": 3400,
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
        $query = Hospital::with(['city.district.province']);

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

        $hospitals = $query->get();

        // Group by type if requested
        if ($request->boolean('group_by_type')) {
            $grouped = $hospitals->groupBy('type');
            return response()->json([
                'data' => [
                    'government' => $grouped->get('government', []),
                    'private' => $grouped->get('private', [])
                ]
            ]);
        }

        return response()->json(['data' => $hospitals]);
    }

    /**
     * Get a specific hospital
     */
    public function show(Hospital $hospital): JsonResponse
    {
        $hospital->load(['city.district.province']);
        return response()->json(['data' => $hospital]);
    }
}
