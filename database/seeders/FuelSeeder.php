<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fuel;

class FuelSeeder extends Seeder
{
    const FUELS = [
        'gázolaj',
        'elektromos',
        'benzin',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::FUELS as $fuels) {
            $fuel = new Fuel();
            $fuel->name = $fuels;
            $fuel->save();
        }
    }
}
