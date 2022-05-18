<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Models\Employee;

class EmployeesController extends Controller
{
  public function index()
  {
    $employees = Employee::all();

    return view('employees.index', ['employees' => $employees]);
  }

  public function create()
  {
    return view('employees.create');
  }

  public function store(Request $request)
  {
    $employee = new Employee;
    $employee->employee_name = $request->input('employee_name');
    $employee->section = $request->input('section');
    $employee->salary = $request->input('salary');
    $employee->save();

    return view('employees.store');
  }
}
