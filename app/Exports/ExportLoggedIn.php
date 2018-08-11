<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportLoggedIn implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $groups = \DB::table('guests')
                     ->get()
                     ->groupBy('pid');

        $groups = $groups->filter(function($actions) {
            if ($actions->last()->action === 'checkin') {
                return $actions;
            }
        });

        $guests = $groups->map(function($actions) {
            $guest = $actions->first();

            return (array) $guest;
        });

        return $guests;
    }


    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'A' => 'ID',
            'B' => 'NAME',
            'C' => 'VISITOR ID',
            'D' => 'CONTACT NAME',
            'E' => 'COMPANY',
            'F' => 'ACTION',
            'G' => 'DATE'
        ];
    }
}
