<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Country;
use App\Models\Graduate;
use App\Models\Title;

class GraduateController extends Controller
{
    public function index()
    {
        return response()->json(Graduate::all());
    }

    public function countries()
    {
        return response()->json(Country::all());
    }

    public function titles()
    {
        return response()->json(Title::all());
    }

    public function areas()
    {
        return response()->json(Area::all());
    }

    public function byCompany($companyId)
    {
        $graduates = Graduate::byCompany($companyId)->get();

        return response()->json($graduates);
    }

    public function byArea($areaId)
    {
        $graduates = Graduate::byArea($areaId)->get();

        return response()->json($graduates);
    }

    public function byTitle($titleId)
    {
        $graduates = Graduate::byTitle($titleId)->get();

        return response()->json($graduates);
    }
}