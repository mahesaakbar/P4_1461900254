<?php

namespace App\Exports;

use App\buku;
use Maatwebsite\Excel\Concerns\FromCollection;

class buku implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return buku::all();
    }
}

