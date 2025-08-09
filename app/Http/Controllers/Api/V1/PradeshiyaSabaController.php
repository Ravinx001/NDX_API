<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\PradeshiyaSaba;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

/**
 * @tags Pradeshiya Sabas
 */
class PradeshiyaSabaController extends Controller
{
    /**
     * Get all Pradeshiya Sabas
     *
     * Retrieve all Pradeshiya Sabas (Local Government Councils) in Sri Lanka.
     *
     * @queryParam district_id integer Filter by district ID. Example: 1
     * @queryParam province_id integer Filter by province ID. Example: 1
     * @queryParam search string Search by name or code. Example: Kesbewa
     * @queryParam per_page integer Number of results per page (default: 50). Example: 20
     *
     * @response 200 {
     *   "data": [
     *     {
     *       "id": 1,
     *       "name_en": "Kesbewa Pradeshiya Sabha",
     *       "name_si": "කෑස්බෑව ප්‍රාදේශීය සභා",
     *       "code": "PS001",
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
        $query = PradeshiyaSaba::with(['district.province']);

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
        $pradeshiyaSabas = $query->orderBy('name_en')->paginate($perPage);

        return response()->json($pradeshiyaSabas);
    }

    /**
     * Get a specific Pradeshiya Sabha
     */
    public function show(PradeshiyaSaba $pradeshiyaSaba): JsonResponse
    {
        $pradeshiyaSaba->load(['district.province']);
        return response()->json(['data' => $pradeshiyaSaba]);
    }
}
