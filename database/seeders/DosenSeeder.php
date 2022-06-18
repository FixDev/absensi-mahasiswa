<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datapalsu = Faker::create('id_ID');

        // Generate Dosen
        $data = [];
        for($i=1; $i<=10; $i++){
            $randMatkul = $datapalsu->numberBetween($min = 1, $max = 50);
            $gender = $datapalsu->randomElement(['male', 'female']);
            $data = [
                'nidn' => $datapalsu->randomNumber(5, true),
                'nama' => $datapalsu->name($gender),
                'matkul_id' => $randMatkul,
            ];
            (new Dosen())->insert($data);
        }
    }
}
