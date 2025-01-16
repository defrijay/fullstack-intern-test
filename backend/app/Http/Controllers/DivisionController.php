<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index(Request $request)
    {
        $divisions = Division::query();

        if ($request->has('name')) {
            $divisions->where('name', 'like', '%' . $request->name . '%');
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Divisions retrieved successfully',
            'data' => [
                'divisions' => $divisions->paginate(10),
            ],
        ]);
    }
}

