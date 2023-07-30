<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorRecords = [
            ['id'=> 1, 'address'=> 'AJilosun','name' => 'SAM', 'city' => 'Ado', 'state' => 'Ekiti', 'country' => 'Nigeria', 'pincode'=>'11', 'email'=>'sam@ven.com', 'mobile'=>'08023456789', 'status'=>'0'],
        ];
        Vendor::insert($vendorRecords);
        
    }
}
