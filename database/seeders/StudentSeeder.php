<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student:create([
                'nama' => 'Shugi',
                'nis' => '12345678',
                'nisn' => '12345678910',
                'kelas' => 'XI-2',
                'tahun' => '2018',
                'ijazah' => '123689769',
                'skhun' => '12345678910',
                'status' => 'active'
        ]);


        Student::factory(5)->create();
    }
}
