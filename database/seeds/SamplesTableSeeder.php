<?php

use Illuminate\Database\Seeder;

class SamplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Sample::class, 20)->create();
    }
}
