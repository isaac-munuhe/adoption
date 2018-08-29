<?php

namespace App\Exports;

use App\Adoptee;
use Maatwebsite\Excel\Concerns\FromCollection;

class AdopteesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Adoptee::all();
    }
}
