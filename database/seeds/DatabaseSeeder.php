<?php

use App\SensorType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(SensorTypesTable::class);
        $this->call(DeviceTableSeeder::class);
        $this->call(SensorsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
