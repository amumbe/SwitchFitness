<?php
use Illuminate\Database\Seeder;
class instructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory (App\instructor::class, 10)->create();
    }
}