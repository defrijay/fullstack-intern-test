<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $employees = Employee::with('division');

        if ($request->has('name')) {
            $employees->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->has('division_id')) {
            $employees->where('division_id', $request->division_id);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Employees retrieved successfully',
            'data' => [
                'employees' => $employees->paginate(10),
            ],
        ]);
    }
    
    public function store(Request $request)
{
    $validated = $request->validate([
        'image' => 'nullable|image',
        'name' => 'required|string',
        'phone' => 'required|string',
        'division' => 'required|exists:divisions,id',
        'position' => 'required|string',
    ]);

    $employee = Employee::create([
        'id' => Str::uuid(),
        'image' => $request->file('image') ? $request->file('image')->store('employees') : null,
        'name' => $validated['name'],
        'phone' => $validated['phone'],
        'division_id' => $validated['division'],
        'position' => $validated['position'],
    ]);

    return response()->json([
        'status' => 'success',
        'message' => 'Employee created successfully',
    ]);
}

    public function update(Request $request, Employee $employee)
{
    $validated = $request->validate([
        'image' => 'nullable|image',
        'name' => 'required|string',
        'phone' => 'required|string',
        'division' => 'required|exists:divisions,id',
        'position' => 'required|string',
    ]);

    $employee->update([
        'image' => $request->file('image') ? $request->file('image')->store('employees') : $employee->image,
        'name' => $validated['name'],
        'phone' => $validated['phone'],
        'division_id' => $validated['division'],
        'position' => $validated['position'],
    ]);

    return response()->json([
        'status' => 'success',
        'message' => 'Employee updated successfully',
    ]);
}

    public function destroy(Employee $employee)
{
    $employee->delete();

    return response()->json([
        'status' => 'success',
        'message' => 'Employee deleted successfully',
    ]);
}

}
