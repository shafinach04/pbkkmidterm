<?php

namespace Database\Seeders;

use App\Models\laboratory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaboratorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        laboratory::create([
            'item_type' => 'Glass',
            'item_cond'=> 'Good',
            'description' => 'nothing',
            'defects' => 'nothing',
            'quantity' => '12',
            'file' => 'C:\xampp\htdocs\lastpractice\lastpractice\public\storage\images\1.jpg',
        ]);
    }
}
