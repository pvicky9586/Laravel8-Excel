<?php

namespace App\Imports;


use App\Models\Product;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


class ProductImport implements ToCollection
{
		 private $numRows = 0;
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        
        foreach ($rows as $row) 
        {
            Product::create([
               'name' => $row[0],
               'description' => $row[1],
               'serial' => $row[3],
               'quantity' => $row[4],
            ]);              
            ++$this->numRows;
        }
    }

    //CONTADOR DE FILAS INSERT
    public function getRowCount(): int //contador de registros
    {
        return $this->numRows;
    }
}
