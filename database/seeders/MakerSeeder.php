<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Maker;

class MakerSeeder extends Seeder
{
    const MAKERS = [
        'Crossover',
        'Fastback',
        'Hardtop',
        'Hatchback',
        'Kabrió',
        'Kombi',
        'Kupé',
        'Liftback',
        'Limuzin',
        'Minivan',
        'Pickup',
        'Roadster',
        'Szedán',
        'Targa',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::MAKERS as $makers) {
            $maker = new Maker();
            $maker->name = $makers;
            $maker->save();
        }


    }
}
