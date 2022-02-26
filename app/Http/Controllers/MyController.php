<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Exports\ProductExport;
use App\Imports\UsersImport;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Input;
use DB;


class MyController extends Controller
{
    

    public function importView()
    {

        $tables = DB::select('SHOW TABLES');
        // foreach ($tables as $table) {
        //   //  $Array = [$table->Tables_in_Laravel_Excel];
        //     foreach ($table as $key => $value)
        //         echo '<a  href=""</a>'.$value.'<br>';
        // }
       return view('import',compact('tables'));
    }

     
 public function import(Request $request) 
    {
            $request->validate([ 'file' => 'required']);
    
            $path = $_FILES['file']['name'];
            //echo $path.'</br>';
            $name = pathinfo($path, PATHINFO_FILENAME);
           // echo 'solo nombre: '.$name;
            
            DB::table('users')->truncate(); //vaciar tabla

            // Excel::import(new UsersImport,request()->file('file'));
            // return back()->with('mensaje','Data imports exitosamente');

           $import = new UsersImport();
            Excel::import($import, request()->file('file'));
            return view('import', ['numRows'=>$import->getRowCount()]);
    }



    









    public function exportView()
    {
        $tables = DB::select('SHOW TABLES');
        foreach ($tables as $table) {
          //  $Array = [$table->Tables_in_Laravel_Excel];
            foreach ($table as $key => $value)
                echo '<a  href=""</a>'.$value.'<br>';
        }
        return view('export',compact('tables'));
    }




        public function exportUsers() 
        {
            return Excel::download(new UsersExport, 'users.xlsx');
        }



        public function exportProducts() 
        {
            return Excel::download(new ProductExport, 'products.xlsx');
        }
     

    /**

    * @return \Illuminate\Support\Collection

    */

 
}
