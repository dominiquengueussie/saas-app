<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Feature;
use App\Models\Package;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //https://www.flaticon.com/fr/icone-gratuite/plus_148764

        User::factory()->create([
            'name' => 'Dominique',
            'email' => 'dominique@example.com',
            'password' => bcrypt('123.321Aa'),
            //'role' => 'admin',
            //'avatar' => 'https://www.flaticon.com/svg/vstatic/svg/148764/32x32.svg?token=784f5c6925a3d108c75a77b69cc6b35a',
        ]);

        Feature::create([
            'image' => 'https://www.flaticon.com/svg/vstatic/svg/148764/32x32.svg?token=784f5c6925a3d108c75a77b69cc6b35a',
            'route_name' => 'feature1.index',
            'name' => 'Calculate Sum',
            'description' => 'This feature allows you to calculate the sum of two numbers.',
            'required_credits' => 1,
            'active' => true,
        ]);
        Feature::create([
            'image' => 'https://www.flaticon.com/fr/icone-gratuite/plus_148764',
            'route_name' => 'feature2.index',
            'name' => 'Calculate Sum',
            'description' => 'This feature allows you to calculate the sum of two numbers.',
            'required_credits' => 3,
            'active' => true,
        ]);

        Package::create([
            'name' => 'Basic',
            'price' => 5,
            'credits' => 20,
        ]);
        Package::create([
            'name' => 'Silver',
            'price' => 20,
            'credits' => 100,
        ]);
        Package::create([
            'name' => 'Gold',
            'price' => 50,
            'credits' => 500,
        ]);
    }
}
