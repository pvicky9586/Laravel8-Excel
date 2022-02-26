<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;



class UsersImport implements ToModel,  WithHeadingRow //ToCollection //
{
    private $numRows = 0;


    // Especificando encabezados de filas impletemt de ToModel y WithHeadingRow  
    //importar //use Maatwebsite\Excel\Concerns\ToModel; use Maatwebsite\Excel\Concerns\WithHeadingRow;
    
    public function model(array $row)
    {
        ++$this->numRows;
        return new User([
            'name'     =>  $row['nombre'] ?? $row['client'] ?? $row['name'] ?? null,
            'email' =>   $row['email'] ?? $row['correo'] ?? null,
            //'password' => \Hash::make($row['password']),
        ]);
    }



    //indicando apartir de que fila desea comenzar la importacion (incluy fila de header)
    public function headingRow(): int 
    {
        return 2;
    }


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