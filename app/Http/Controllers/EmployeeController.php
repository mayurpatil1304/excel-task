<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index(Request $request)
    { 
        $query = Employee::query();

        if ($request->has('search')) {
            $query->where('emp_id', $request->input('search'));
        }
        if ($request->has('job_title')) {
            $query->where('emp_title', $request->input('job_title'));
        }
        if ($request->has('department')) {
            $query->where('emp_dept', $request->input('department'));
        }
        if ($request->has('from_hiring_date')) {
            $query->where('hire_date', '>=', $request->input('from_hiring_date'));
        }
        if ($request->has('to_hiring_date')) {
            $query->where('hire_date', '<=', $request->input('to_hiring_date'));
        }
        if ($request->has('sort_by')) {
            $sortColumn = $request->input('sort_by');
            $query->orderBy('hire_date');
        }
        $employees = $query->get();

        return response()->json($employees);
    }
    
}
