<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;


class MyController extends Controller
{
    

    public function importView()
    {
        return view('import');
    }

     
   public function import() 
    {
        Excel::import(new UsersImport,request()->file('file'));
        return back();
       // return view('import');
    }







    /**

    * @return \Illuminate\Support\Collection

    */


    public function exportView()
    {
        return view('export');
    }
    
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');

    }

     

    /**

    * @return \Illuminate\Support\Collection

    */

 
}
