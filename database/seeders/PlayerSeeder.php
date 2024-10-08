<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player; // Tambahkan ini

class PlayerSeeder extends Seeder
{
    public function run()
    {
        Player::create([
            'nama_pemain' => 'Lionel Messi',
            'no_punggung' => 10,
            'posisi' => 'Penyerang'
        ]);

        Player::create([
            'nama_pemain' => 'Cristiano Ronaldo',
            'no_punggung' => 7,
            'posisi' => 'Penyerang'
        ]);

        Player::create([
            'nama_pemain' => 'Sergio Ramos',
            'no_punggung' => 4,
            'posisi' => 'Bek'
        ]);

        Player::create([
            'nama_pemain' => 'Bambang',
            'no_punggung' => 1,
            'posisi' => 'Bek'
        ]);

        Player::create([
            'nama_pemain' => 'Mbappe',
            'no_punggung' => 3,
            'posisi' => 'Bek'
        ]);

        Player::create([
            'nama_pemain' => 'Arhan',
            'no_punggung' => 2,
            'posisi' => 'Bek'
        ]);
    }
}
