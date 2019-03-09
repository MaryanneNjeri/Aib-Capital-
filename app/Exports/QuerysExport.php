<?php

namespace App\Exports;

use App\Query;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
 
class QuerysExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Query::all();
    } 
    public function headings() : array{
        return [
            'Id',
            'Name',
            'Telephone Number',
            'Email',
            'Location',
            'Query',
            'Created At',
            'Updated At'
        ];
    }
}
