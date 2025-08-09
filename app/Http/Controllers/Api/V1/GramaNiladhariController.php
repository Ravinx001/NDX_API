<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\GramaNiladhariDivision;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/**
 * @tags Grama Niladhari Divisions
 */
class GramaNiladhariController extends Controller
{
    /**
     * Get all Grama Niladhari divisions
     *
     * Retrieve all Grama Niladhari divisions in Sri Lanka.
     *
     * @queryParam district_id integer Filter by district ID. Example: 1
     * @queryParam province_id integer Filter by province ID. Example: 1
     * @queryParam search string Search by name. Example: Colombo
     * @queryParam per_page integer Number of results per page (default: 50). Example: 20
     *
     * @response 200 {
     *   "data": [
     *     {
     *       "id": 1,
     *       "name_en": "Colombo Central",
     *       "name_si": "කොළඹ මධ්‍යම",
     *       "code": "001/A",
     *       "district": {
     *         "id": 1,
     *         "name_en": "Colombo",
     *         "province": {
     *           "id": 1,
     *           "name_en": "Western Province"
     *         }
     *       }
     *     }
     *   ]
     * }
     */
    public function index(Request $request): JsonResponse
    {
        $query = GramaNiladhariDivision::with(['district.province']);

        // Filters
        if ($request->has('district_id')) {
            $query->where('district_id', $request->district_id);
        }

        if ($request->has('province_id')) {
            $query->whereHas('district', function ($q) use ($request) {
                $q->where('province_id', $request->province_id);
            });
        }

        if ($request->has('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('name_en', 'like', "%{$search}%")
                    ->orWhere('name_si', 'like', "%{$search}%")
                    ->orWhere('name_ta', 'like', "%{$search}%")
                    ->orWhere('code', 'like', "%{$search}%");
            });
        }

        $perPage = $request->get('per_page', 50);
        $divisions = $query->orderBy('code')->paginate($perPage);

        return response()->json($divisions);
    }

    /**
     * Get a specific Grama Niladhari division
     */
    public function show(GramaNiladhariDivision $gramaNiladhari): JsonResponse
    {
        $gramaNiladhari->load(['district.province']);
        return response()->json(['data' => $gramaNiladhari]);
    }
}
