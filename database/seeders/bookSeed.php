<?php

namespace Database\Seeders;

use App\Models\Crud;
use Illuminate\Database\Seeder;

class bookSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$faker = Faker\Factory::create();
        for($i = 0; $i < 100; $i++){
            Crud::Create([
                'title' => 'lost'.$i,
                'author' => 'nadim',
                'available' => $i%2,
                'isbn' => '100'.$i,
                'page' => (100+$i)%76,
            ]
            );
        }
    }
}
