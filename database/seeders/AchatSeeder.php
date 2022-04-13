<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Achat;

class AchatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Achat::factory()->count(50)->create();
    }
}
