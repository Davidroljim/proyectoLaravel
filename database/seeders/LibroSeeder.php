<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Libro;

use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libro')->insert([
            'ISBN' => '12346SDFGSDAG',
            'titulo' => 'Harry Potter y la piedra filosofal',
            'autor' => 'J.K. Rowling',
            'idioma' => 'Español',
            'publicacion' => '1997-01-30',
            'editorial' => '1',
        ]);
        DB::table('libro')->insert([
            'ISBN' => '452432241234A',
            'titulo' => 'Harry Potter y la cámara secreta',
            'autor' => 'J.K. Rowling',
            'idioma' => 'Español',
            'publicacion' => '1998-07-02',
            'editorial' => '1',
        ]);
        DB::table('libro')->insert([
            'ISBN' => 'F123454DASD12',
            'titulo' => 'Harry Potter y la Orden del Fénix',
            'autor' => 'J.K. Rowling',
            'idioma' => 'Español',
            'publicacion' => '2003-07-21',
            'editorial' => '1',
        ]);
        DB::table('libro')->insert([
            'ISBN' => 'F123454DFS12S',
            'titulo' => 'Harry Potter y el prisionero de Azkaban',
            'autor' => 'J.K. Rowling',
            'idioma' => 'Español',
            'publicacion' => '1999-07-08',
            'editorial' => '1',
        ]);
        DB::table('libro')->insert([
            'ISBN' => 'F123454DFS12Y',
            'titulo' => 'Harry Potter y el cáliz de fuego',
            'autor' => 'J.K. Rowling',
            'idioma' => 'Español',
            'publicacion' => '2000-07-08',
            'editorial' => '1',
        ]);
        DB::table('libro')->insert([
            'ISBN' => 'H123454DASD12',
            'titulo' => 'Harry Potter y el misterio del príncipe',
            'autor' => 'J.K. Rowling',
            'idioma' => 'Español',
            'publicacion' => '2005-07-16',
            'editorial' => '1',
        ]);
        DB::table('libro')->insert([
            'ISBN' => 'H123454DASD42',
            'titulo' => 'Harry Potter y las reliquias de la Muerte',
            'autor' => 'J.K. Rowling',
            'idioma' => 'Español',
            'publicacion' => '2007-07-21',
            'editorial' => '1',
        ]);
    }
}
