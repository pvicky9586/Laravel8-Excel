<?php

namespace App\Imports;

use App\Models\User;
//use Maatwebsite\Excel\Concerns\ToModel;
//use Maatwebsite\Excel\Concerns\WithHeadingRow;


use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
//use Maatwebsite\Excel\Imports\HeadingRowFormatter;
//HeadingRowFormatter::default('none');



class UsersImport implements ToCollection //
{
    private $numRows = 0;
    //private $filas = 0;


    public function collection(Collection $rows)
    {
        // insertar solo filas sin especificar encabezados impletemt de ToCollection
        // importar use Illuminate\Support\Collection; use Maatwebsite\Excel\Concerns\ToCollection;
        //este metodo inserta todas las filas contenidas en mi excel
       // $this->filas = $rows;
        
        foreach ($rows as $row) 
        {
            User::create([
               'name' => $row[0],
               'email' => $row[1],
            ]);              
            ++$this->numRows;
        }
    }


    // Especificando encabezados de filas impletemt de ToModel y WithHeadingRow  
    //importar //use Maatwebsite\Excel\Concerns\ToModel; use Maatwebsite\Excel\Concerns\WithHeadingRow;
    
    // public function model(array $row)
    // {
    //     ++$this->numRows;
    //     return new User([
    //         'name'     => $row['nombre'] ?? $row['client'] ?? $row['name'] ?? null,
    //         'email' => $row['email'] ?? $row['correo'] ?? null
    //         //'password' => \Hash::make($row['password']),
    //     ]);
    // }




    // public function headingRow(): int //indicando apartir de que fila desea comenzar la importacion 
    // {
    //     return 2;
    // }






// VALIDANDO implementar WithValidation import //use Maatwebsite\Excel\Concerns\WithValidation;
// public function rules(): array
// {
//     return [

//          // Siempre valida por lotes
//          // Fila.columna
//          '0.0' => 'in:Código',
//          '0.1' => 'in:Nat',
//          '0.2' => 'in:Ud',
//          '0.3' => 'in:Resumen',

//     ];
// }











    public function getRowCount(): int //contador de registros
    {
        return $this->numRows;
    }

}