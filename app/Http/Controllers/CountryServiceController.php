<?php

namespace App\Http\Controllers;

use App\Models\CountryService;
use Illuminate\Http\Request;

class CountryServiceController extends Controller
{
    public function index(Request $request)
{
    $query = CountryService::query();

    if ($request->has('country')) {
        $query->where('country', $request->country);
    }

    if ($request->has('app')) {
        $query->where('app', $request->app);
    }

    $services = $query->get()->groupBy('country')->map(function ($items, $country) {
        return [
            'country' => $country,
            'services' => $items->map(function ($item) {
                return [
                    'app' => $item->app,
                    'price' => $item->price,
                ];
            })->values(),
        ];
    })->values();

    return response()->json($services);
}

}

?>