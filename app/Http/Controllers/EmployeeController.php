<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
         $data = Employee::all();
         return view('employee.index',['empl' => $data]);
    }
    

}
