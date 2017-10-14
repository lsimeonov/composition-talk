<?php


class RobotSeeder extends \Illuminate\Database\Seeder
{
    /**
     * Run seed
     */
    public function run()
    {
        factory(\App\Model\Robot::class, 10)->create();
    }
}