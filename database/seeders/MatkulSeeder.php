<?php

namespace Database\Seeders;

use App\Models\Matkul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MatkulSeeder extends Seeder
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
        for($i=1; $i<=50; $i++){
            $smt = $datapalsu->numberBetween($min = 1, $max = 8);
            $data = [
                'nama' => 'Matkul '.$i,
                'semester' => $smt,
            ];
            (new Matkul())->insert($data);
        }
    }
}
