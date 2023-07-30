<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sections;

class SectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sectionRecords = [
            ['id' => 1, 'name' => 'Foods', 'Status' => 1],
            ['id' => 2, 'name' => 'Drinks', 'Status' => 1],
            
    ];
    Sections::insert($sectionRecords);
    }
}
