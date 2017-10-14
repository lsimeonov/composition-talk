<?php

use Illuminate\Database\Seeder;

class DuckSeeder extends Seeder
{

    /**
     * Run seed
     */
    public function run()
    {
        factory(\App\Model\Duck::class, 10)->create();
    }

}