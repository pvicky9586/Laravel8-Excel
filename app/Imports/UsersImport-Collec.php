<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;



class UsersImport implements ToCollection
{
    private $numRows = 0;


    public function collection(Collection $rows)
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








    public function getRowCount(): int //contador de registros
    {
        return $this->numRows;
    }

}