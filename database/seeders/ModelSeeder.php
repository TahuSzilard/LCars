<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{

    const MODELS = [
        'Toyota Camry',
        'Honda Accord',
        'BMW 3 Series',
        'Audi A4',
        'Mercedes-Benz C-Class',
        'Tesla Model 3',
        'Rivian R1T',
        'Nissan Leaf',
        'Audi e-tron',
        'Lucid Air',
        'Rolls-Royce Phantom',
        'Bentley Continental GT',
        'Lexus LS',
        'Jaguar XJ',
        'Aston Martin DB11'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::MODELS as $models) {
            $model = new Model();
            $model->name = $models;
            $model->save();
        }
    }
}