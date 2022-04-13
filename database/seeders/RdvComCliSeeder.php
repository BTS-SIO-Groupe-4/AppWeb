<?php

namespace Database\Seeders;

use App\Models\RdvComCli;
use Illuminate\Database\Seeder;

class RdvComCliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RdvComCli::factory()->count(50)->create();
    }
}
