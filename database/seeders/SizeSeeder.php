<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create([
            'name' => 'S',
            'sort' => 10000
        ]);

        Size::create([
            'name' => 'M',
            'sort' => 10100
        ]);

        Size::create([
            'name' => 'L',
            'sort' => 10200
        ]);

        Size::create([
            'name' => 'XL',
            'sort' => 10300
        ]);

        Size::create([
            'name' => 'XXL',
            'sort' => 10400
        ]);
    }
}
