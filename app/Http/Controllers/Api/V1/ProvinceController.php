<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/**
 * @tags Provinces
 */
class ProvinceController extends Controller
{
    /**
     * Get all provinces
     *
     * Retrieve all provinces in Sri Lanka with their districts and cities count.
     *
     * @queryParam include string Include related data (districts,cities). Example: districts,cities
     * @queryParam with_counts boolean Include districts and cities count. Example: true
     *
     * @response 200 {
     *   "data": [
     *     {
     *       "id": 1,
     *       "name_en": "Western Province",
     *       "name_si": "බස්නාහිර පළාත",
     *       "name_ta": "மேல் மாகாணம்",
     *       "code": "WP",
     *       "districts_count": 3,
     *       "cities_count": 25,
     *       "created_at": "2024-01-01T00:00:00.000000Z",
     *       "updated_at": "2024-01-01T00:00:00.000000Z"
     *     }
     *   ]
     * }
     */
    public function index(Request $request): JsonResponse
    {
        $query = Province::query();

        // Include related data
        if ($request->has('include')) {
            $includes = explode(',', $request->include);
            $allowedIncludes = ['districts', 'cities'];
            $validIncludes = array_intersect($includes, $allowedIncludes);

            if (!empty($validIncludes)) {
                $query->with($validIncludes);
            }
        }

        // Include counts
        if ($request->boolean('with_counts')) {
            $query->withCount(['districts', 'cities']);
        }

        $provinces = $query->orderBy('name_en')->get();

        return response()->json(['data' => $provinces]);
    }

    /**
     * Get a specific province
     *
     * @urlParam province integer required The ID of the province. Example: 1
     * @queryParam include string Include related data (districts,cities). Example: districts
     */
    public function show(Request $request, Province $province): JsonResponse
    {
        // Include related data
        if ($request->has('include')) {
            $includes = explode(',', $request->include);
            $allowedIncludes = ['districts', 'cities'];
            $validIncludes = array_intersect($includes, $allowedIncludes);

            if (!empty($validIncludes)) {
                $province->load($validIncludes);
            }
        }

        $province->loadCount(['districts', 'cities']);

        return response()->json(['data' => $province]);
    }
}
