<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Student extends Model
{
    use HasFactory;
    use Sortable;

    protected $fillable =[
        'ijazah',
        'skhun'
    ];

    public $sortable = [
        'nama', 'nis', 'nisn', 'kelas', 'tahun', 'status', 
    ];
}
