<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Maatwebsite\Excel\Concerns\WithValidation;





use Illuminate\Validation\Rule;

use Maatwebsite\Excel\Concerns\Importable;






     // Above is alias for as it always validates in batches '*.1' => Rule::in(['patrick@maatwebsite.nl']), // Can also use callback validation rules '0' => function($attribute, $value, $onFailure) { if ($value !== 'Patrick Brouwers') { $onFailure('Name is not Patrick Brouwers'); } } ]; } } 































class UsersImport implements ToModel,  WithHeadingRow, WithValidation
{

     use Importable; 
    private $numRows = 0;


    // Especificando encabezados de filas impletemt de ToModel y WithHeadingRow  
    //importar //use Maatwebsite\Excel\Concerns\ToModel; use Maatwebsite\Excel\Concerns\WithHeadingRow;
    public function model(array $row)
    {
        ++$this->numRows;
        return new User([
            'name'     =>  $row['nombre'] ?? $row['client'] ?? $row['name'] ?? null,
            'email' =>   $row['email'] ?? $row['correo'] ??$row['correo electronico'] ?? null,
            //'password' => \Hash::make($row['password']),
        ]);
    }
    //IMPORT DESDE...  (incluy fila de header)
    public function headingRow(): int 
    {
        return 2;
    }

























// VALIDANDO implementar WithValidation import //use Maatwebsite\Excel\Concerns\WithValidation;
 public function rules(): array
 {
    return [

         // Siempre valida por lotes
         // Fila.columna
        '1' => Rule::in(['patrick@maatwebsite.nl']),
         '0.0' => 'in:Código',
         '0.1' => 'in:Nat',
         '0.2' => 'in:Ud',
         '0.3' => 'in:Resumen',
    ];
 }




















//CONTADOR DE FILAS INSERT
    public function getRowCount(): int //contador de registros
    {
        return $this->numRows;
    }

}