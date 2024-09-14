<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\product_model;
use App\Models\User;

class product_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        product_model::create([
            'name' => 'Kimchi',
            'category' => 'Food',
            'description' => 'Kimchi is a traditional Korean side dish made with salted fermented vegetable.',
        ]);
        product_model::create([
            'name' => 'Lomi',
            'category' => 'Food',
            'description' => 'Lomi is atype of noodle soup dish that make use of thin egg noodles.',
        ]);
        product_model::create([
            'name' => 'Xiaomi pad 6',
            'category' => 'Gadgets',
            'description' => 'A midrange tablet that has a flagship chipset/processor. Affodrable for its price.',
        ]);
        product_model::create([
            'name' => 'Suzuki nmax 155cc ',
            'category' => 'Vehicle',
            'description' => 'A scooter type motocycle that strong acceleration and high top speed.',
        ]);
        product_model::create([
            'name' => 'Solar panel',
            'category' => 'Appliances',
            'description' => 'Solar panel can collect clean energy on the sunlight that will converted to electricity.',
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
        ]);
    }
}
