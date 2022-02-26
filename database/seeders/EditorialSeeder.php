<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Editorial;

use Illuminate\Support\Facades\DB;
class EditorialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editorial')->insert([
            'id' => '1',
            'nombre' => 'Bloomsbury Publishing',
            'nacionalidad' => 'Británico',
        ]);
    }
}
