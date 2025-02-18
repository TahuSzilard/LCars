<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Body;

class BodySeeder extends Seeder
{

    const BODIES = [
        'VIP',
        'luxus',
        'kombi',
        'sport',
        '3 ajtós',
        '5 ajtós',
        '7 ajtós',
        'napfénytető',
        'önvezető',
        'ülésfűtés',
        'terepjáró',
        'elektromos csomagtartó',
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::BODIES as $bodies) {
            $body = new Body();
            $body->name = $bodies;
            $body->save();
        }
    }
}
