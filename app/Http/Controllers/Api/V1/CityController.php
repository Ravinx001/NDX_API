<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/**
 * @tags Cities
 */
class CityController extends Controller
{
    /**
     * Get all cities
     *
     * Retrieve all cities in Sri Lanka with their district and province information.
     *
     * @queryParam district_id integer Filter by district ID. Example: 1
     * @queryParam province_id integer Filter by province ID. Example: 1
     * @queryParam has_coordinates boolean Filter cities that have latitude/longitude. Example: true
     * @queryParam include string Include related data (district,province). Example: district.province
     * @queryParam per_page integer Number of results per page (default: 50). Example: 20
     *
     * @response 200 {
     *   "data": [
     *     {
     *       "id": 1,
     *       "name_en": "Colombo",
     *       "name_si": "කොළඹ",
     *       "latitude": "6.9271",
     *       "longitude": "79.8612",
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
        $query = City::query();

        // Filters
        if ($request->has('district_id')) {
            $query->where('district_id', $request->district_id);
        }

        if ($request->has('province_id')) {
            $query->whereHas('district', function ($q) use ($request) {
                $q->where('province_id', $request->province_id);
            });
        }

        if ($request->boolean('has_coordinates')) {
            $query->whereNotNull('latitude')
                ->whereNotNull('longitude');
        }

        // Include related data
        $defaultIncludes = ['district.province'];
        if ($request->has('include')) {
            $includes = explode(',', $request->include);
            $allowedIncludes = ['district', 'district.province', 'postalCodes'];
            $validIncludes = array_intersect($includes, $allowedIncludes);
            $query->with(array_merge($defaultIncludes, $validIncludes));
        } else {
            $query->with($defaultIncludes);
        }

        // Pagination
        $perPage = $request->get('per_page', 50);
        $cities = $query->orderBy('name_en')->paginate($perPage);

        return response()->json($cities);
    }

    /**
     * Get a specific city
     */
    public function show(Request $request, City $city): JsonResponse
    {
        $defaultIncludes = ['district.province'];

        if ($request->has('include')) {
            $includes = explode(',', $request->include);
            $allowedIncludes = ['district', 'district.province', 'postalCodes', 'policeStations', 'hospitals', 'pharmacies'];
            $validIncludes = array_intersect($includes, $allowedIncludes);
            $city->load(array_merge($defaultIncludes, $validIncludes));
        } else {
            $city->load($defaultIncludes);
        }

        $city->loadCount(['postalCodes', 'policeStations', 'hospitals', 'pharmacies']);

        return response()->json(['data' => $city]);
    }
}
