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

        return TrackingInfo::select([
            'internal_client', 'client', 'module', 'language', 'url', 'width', 'height', 'browser',
            'browser_version', 'java', 'mobile', 'os' , 'osversion', 'cookies', 'created_at'
        ])->get();
        // return TrackingInfo::all()->except(['track']);
    }

    public function headings(): array
    {
        return [
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
