<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class StudentExport implements FromCollection, WithMapping, WithHeadings
{
    public function collection()
    {
        return Student::all();
    }

    public function map($students):array
    {
        return[
            $students->nama,
            $students->nis,
            $students->nisn,
            $students->tahun,
            $students->status,
        ];
    }

    public function headings():array
        {
        return [
            //pastikan urut dan jumlahnya sesuai dengan yang ada di mapping-data atau table di database
            'Nama',
            'Nomor Induk Siswa',
            'Nomor Induk Siswa Nasional',
            'Tahun',
            'Status'
        ];
    }
}
