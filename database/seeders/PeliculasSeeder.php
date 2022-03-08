<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peliculas')->insert([
            'titulo' => 'Harry Potter y la piedra filosofal',
            'duracion' => '60',
            'email' => 'david.roldan.jimenez@iespoligonosur.org',
        ]);
        DB::table('libro')->insert([
            'titulo' => 'Harry Potter y la cámara secreta',
            'duracion' => '90',
            'email' => 'david.roldan.jimenez@iespoligonosur.org',
        ]);
    }
}
