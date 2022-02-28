<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class UsersImport implements ToCollection
{
    private $numRows = 0;

    //IMPORT COLLECTION (filas sin header) ToCollection
    public function collection(Collection $rows) //pruebas con collection
    {
        // insertar solo filas sin especificar encabezados impletemt de ToCollection
        // importar use Illuminate\Support\Collection; use Maatwebsite\Excel\Concerns\ToCollection;
        //este metodo inserta todas las filas contenidas en mi excel
        
        foreach ($rows as $row) 
        {
            User::create([
                'id' => $row[0],
               'name' => $row[1],
               'email' => $row[2],
            ]);              
            ++$this->numRows;
        }
    }

    // IMPORTAMDO CON HEADER ToModel y WithHeadingRow 
    // // Especificando encabezados de filas impletemt de ToModel y WithHeadingRow  
    // //importar //use Maatwebsite\Excel\Concerns\ToModel; use Maatwebsite\Excel\Concerns\WithHeadingRow;
    
    // public function model(array $row)
    // {
    //     ++$this->numRows;
    //     return new User([
    //         'name'     =>  $row['nombre'] ?? $row['client'] ?? $row['name'] ?? null,
    //         'email' =>   $row['email'] ?? $row['correo'] ?? $row['correo electronico'] ?? null,
    //         //'password' => \Hash::make($row['password']),
    //     ]);
    // }
    // //indicando apartir de que fila desea comenzar la importacion (incluy fila de header)
    // public function headingRow(): int 
    // {
    //     return 4;
    // }



    //CONTADOR DE FILAS INSERT
    public function getRowCount(): int //contador de registros
    {
        return $this->numRows;
    }

}