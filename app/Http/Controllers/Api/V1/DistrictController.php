<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/**
 * @tags Districts
 */
class DistrictController extends Controller
{
    /**
     * Get all districts
     *
     * Retrieve all districts in Sri Lanka with their province information.
     *
     * @queryParam province_id integer Filter by province ID. Example: 1
     * @queryParam include string Include related data (province,cities). Example: province,cities
     * @queryParam with_counts boolean Include cities count. Example: true
     *
     * @response 200 {
     *   "data": [
     *     {
     *       "id": 1,
     *       "name_en": "Colombo",
     *       "name_si": "කොළඹ",
     *       "name_ta": "கொழும்பு",
     *       "code": "CO",
     *       "province_id": 1,
     *       "cities_count": 15,
     *       "province": {
     *         "id": 1,
     *         "name_en": "Western Province",
     *         "code": "WP"
     *       }
     *     }
     *   ]
     * }
     */
    public function index(Request $request): JsonResponse
    {
        $query = District::query();

        // Filter by province
        if ($request->has('province_id')) {
            $query->where('province_id', $request->province_id);
        }

        // Include related data
        $defaultIncludes = ['province'];
        if ($request->has('include')) {
            $includes = explode(',', $request->include);
            $allowedIncludes = ['province', 'cities', 'gramaNiladhariDivisions', 'pradeshiyaSabas'];
            $validIncludes = array_intersect($includes, $allowedIncludes);
            $query->with(array_merge($defaultIncludes, $validIncludes));
        } else {
            $query->with($defaultIncludes);
        }

        // Include counts
        if ($request->boolean('with_counts')) {
            $query->withCount(['cities', 'gramaNiladhariDivisions', 'pradeshiyaSabas']);
        }

        $districts = $query->orderBy('name_en')->get();

        return response()->json(['data' => $districts]);
    }

    /**
     * Get a specific district
     */
    public function show(Request $request, District $district): JsonResponse
    {
        $defaultIncludes = ['province'];

        if ($request->has('include')) {
            $includes = explode(',', $request->include);
            $allowedIncludes = ['province', 'cities', 'gramaNiladhariDivisions', 'pradeshiyaSabas'];
            $validIncludes = array_intersect($includes, $allowedIncludes);
            $district->load(array_merge($defaultIncludes, $validIncludes));
        } else {
            $district->load($defaultIncludes);
        }

        $district->loadCount(['cities', 'gramaNiladhariDivisions', 'pradeshiyaSabas']);

        return response()->json(['data' => $district]);
    }
}
