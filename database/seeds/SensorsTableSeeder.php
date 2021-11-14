<?php

use App\Device;
use App\Sensor;
use Illuminate\Database\Seeder;

class SensorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sensor::create([
            'name' => 'Voltage',
            'device_id' => 1,
            'sensor_type_id' => 6,
            'min_sensor' => 0,
            'max_sensor' => 200,
            'treshold_min_sensor' => 200,
            'min_hijau' => 250,
            'max_hijau' => 400,
            'treshold_max_sensor' => 450,
            'min_merah' => 450,
            'max_merah' => 600,
            'avg_sensor' => 350,
            'L1' => 345,
            'L2' => 350,
            'L3' => 355,
        ]);
        Sensor::create([
            'name' => 'Current',
            'device_id' => 1,
            'sensor_type_id' => 7,
            'min_sensor' => 0,
            'max_sensor' => 0,
            'treshold_min_sensor' => 0,
            'min_hijau' => 15,
            'max_hijau' => 25,
            'treshold_max_sensor' => 30,
            'min_merah' => 30,
            'max_merah' => 50,
            'avg_sensor' => 35
        ]);
        Sensor::create([
            'name' => 'Power',
            'device_id' => 1,
            'sensor_type_id' => 8,
            'min_sensor' => 0,
            'max_sensor' => 0,
            'treshold_min_sensor' => 0,
            'min_hijau' => 15,
            'max_hijau' => 25,
            'treshold_max_sensor' => 30,
            'min_merah' => 30,
            'max_merah' => 50,
            'avg_sensor' => 35
        ]);
    }
}
