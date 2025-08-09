<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\PostalCode;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/**
 * @tags Postal Codes
 */
class PostalCodeController extends Controller
{
    /**
     * Get all postal codes
     *
     * Retrieve all postal codes in Sri Lanka with their location information.
     *
     * @queryParam city_id integer Filter by city ID. Example: 1
     * @queryParam district_id integer Filter by district ID. Example: 1
     * @queryParam province_id integer Filter by province ID. Example: 1
     * @queryParam code string Filter by postal code. Example: 00100
     * @queryParam search string Search by area name or postal code. Example: Fort
     * @queryParam per_page integer Number of results per page (default: 50). Example: 20
     *
     * @response 200 {
     *   "data": [
     *     {
     *       "id": 1,
     *       "code": "00100",
     *       "area_name": "Colombo Fort",
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
        $query = PostalCode::with(['city.district.province']);

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

        if ($request->has('code')) {
            $query->where('code', $request->code);
        }

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('area_name', 'like', "%{$search}%")
                    ->orWhere('code', 'like', "%{$search}%");
            });
        }

        $perPage = $request->get('per_page', 50);
        $postalCodes = $query->orderBy('code')->paginate($perPage);

        return response()->json($postalCodes);
    }

    /**
     * Get a specific postal code
     */
    public function show(PostalCode $postalCode): JsonResponse
    {
        $postalCode->load(['city.district.province']);
        return response()->json(['data' => $postalCode]);
    }
}
