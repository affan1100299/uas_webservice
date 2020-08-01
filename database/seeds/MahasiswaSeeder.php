<?php

use App\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mahasiswa = [
            [
                'nama' => 'Affan Arif Sanjani',
                'nim' => '1710520000',
                'alamat' => 'Pengadangan',
                'email' => 'affan@ubg.ac.id',
                'jurusan' => 'Ilmu Komputer',
                'semester' => 6,
            ],
        ];

        foreach ($mahasiswa as $key => $value) {
            Mahasiswa::create($value);
        }
    }
}
