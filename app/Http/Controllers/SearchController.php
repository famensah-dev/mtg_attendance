<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance; 

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = Attendance::query();

        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->input('location') . '%');
        }

        if ($request->filled('organization')) {
            $query->where('organization', 'like', '%' . $request->input('organization') . '%');
        }

        if ($request->filled('area_of_service')) {
            $query->where('area_of_service', 'like', '%' . $request->input('area_of_service') . '%');
        }

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        $data = $query->get();

        return view('index', compact('data'));
        // dd($data);
    }
}
