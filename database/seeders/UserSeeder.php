<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
        for($i=1; $i<=10; $i++){
            $data = [];
            $gender = $datapalsu->randomElement(['male', 'female']);
            $data = [
                'username' => $datapalsu->username($gender),
                'email' => $datapalsu->email($gender),
                'password' => Hash::make('12345678'),
                'role' => 'mahasiswa',
                'mahasiswa_id' => $i,
                'dosen_id' => null,
            ];
            (new User())->insert($data);
        }

        // Generate Dosen
        for($i=1; $i<=10; $i++){
            $data = [];
            $gender = $datapalsu->randomElement(['male', 'female']);
            $data = [
                'username' => $datapalsu->username($gender),
                'email' => $datapalsu->email($gender),
                'password' => Hash::make('12345678'),
                'role' => 'dosen',
                'mahasiswa_id' => null,
                'dosen_id' => $i,
            ];
            (new User())->insert($data);
        }

        $data = [
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'mahasiswa_id' => null,
            'dosen_id' => null,
        ];
    }
}
