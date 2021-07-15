<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        return response()->json(City::all());
    }

    public function set(Request $request)
    {
        $name = $request->post('name');
        $city = new City();
        $city->name = $name;
        $city->save();

        return response()->json(['message' => 'Successfuly created']);
    }
}
