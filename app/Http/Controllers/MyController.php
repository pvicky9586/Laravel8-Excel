<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Exports\ProductExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use DB;


class MyController extends Controller
{
    

    public function importView()
    {

        // $users = DB::table('users')->get();
        // foreach ($users as $user)
        // {
        //     var_dump($user->name);
        // }
    

        return view('import');

    }

     
 public function import(Request $reques) 
     {

        $path = $_FILES['file']['name'];
        $name = pathinfo($path, PATHINFO_FILENAME);

        echo $name;

        Excel::import(new UsersImport,request()->file('file'));
        return back()->with('mensaje','Data imports exitosamente');
     }






    


















    public function exportView()
    {
        return view('export');
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
