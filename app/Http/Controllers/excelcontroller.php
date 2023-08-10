<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\EmployeeImport;
use Excel;

class excelcontroller extends Controller
{
    public function getExcelView()
    {
        return view('excel');
    }
    public function postExcelData(Request $req)
    {
        $file = $req->file('excel_file');
        Excel::import(new EmployeeImport,$file);
    }
}
