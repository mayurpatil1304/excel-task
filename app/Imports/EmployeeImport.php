<?php

namespace App\Imports;
use App\Models\excel;
use Illuminate\Support\Collection;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToCollection;

class EmployeeImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        // echo "<pre>";
        // print_r($rows);
        // die();
        
        $count = count($rows);
       
        for($i=1;$i<$count;$i++){
            excel::UpdateOrInsert([
                'emp_id'=>$rows[$i][0],
                'emp_name'=>$rows[$i][1],
                'emp_title'=>$rows[$i][2],
                'emp_dept'=>$rows[$i][3],
                'buss_unit'=>$rows[$i][4],
                'gender'=>$rows[$i][5],
                'ethicity'=>$rows[$i][6],
                'age'=>$rows[$i][7],
                'hire_date'=>$rows[$i][8],
                'ann_sal'=>$rows[$i][9],
                'bonus'=>$rows[$i][10],
                'country'=>$rows[$i][11],
                'city'=>$rows[$i][12],
                'exit_date'=>$rows[$i][13],
                'created_at'=>Carbon::now()

            ]);


        }
    }
}
