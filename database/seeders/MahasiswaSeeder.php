<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datapalsu = Faker::create('id_ID');

        // Generate Mahasiswa
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            $randKelas = $datapalsu->randomElement(['TI ', 'SI ']);
            $randKelasNum = $datapalsu->numberBetween($min = 1, $max = 18);
            $randSemester = $datapalsu->numberBetween($min = 1, $max = 12);
            $gender = $datapalsu->randomElement(['male', 'female']);
            $data = [
                'nim' => $datapalsu->randomNumber(5, true),
                'nama' => $datapalsu->name($gender),
                'semester' => $randSemester,
                'kelas' => $randKelas . $randKelasNum,
            ];
            (new Mahasiswa())->insert($data);
        }
    }
}
