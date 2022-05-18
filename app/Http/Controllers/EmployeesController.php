<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EmployeesController extends Controller
{
  public function index()
  {
    $employees = DB::table('employees')->get();

    return view('employees.index', ['employees' => $employees]);
  }

  public function create()
  {
    return view('employees.create');
  }

  public function store(Request $request)
  {
    DB::table('employees')->insert([
      'employee_name' => $request->input('employee_name'),
      'section' => $request->input('section'),
      'salary' => $request->input('salary'),
    ]);

    return view('employees.store');
  }
}
