<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainsController extends Controller
{
    public function index()
    {
        //$trains = Train::all();

        $trains = Train::where('departure_time', '>=', now())->get();

        return view('trains', compact('trains'));
    }
}
