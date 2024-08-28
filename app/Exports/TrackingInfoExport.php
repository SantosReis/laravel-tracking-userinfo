<?php

namespace App\Exports;

use App\Models\TrackingInfo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TrackingInfoExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TrackingInfo::all();
    }

    public function headings(): array
    {
        return [
            "ID",
            "Internal Client",
            "Client", 
            "Module",
            "Language",
            "URL",
            "Width",
            "Height",
            "Browser",
            "Browser Version",
            "Java",
            "Mobile",
            "OS",
            "OSVersion",
            "Cookies",
            "Date"
        ];
    }
}
