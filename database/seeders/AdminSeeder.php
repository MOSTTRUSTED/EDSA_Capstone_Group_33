<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords = [
            ['id'=> 4, 'name' => 'SAM', 'type' => 'vendor', 'vendor_id'=>1, 'mobile'=>'08023456789', 'email'=>'sam@ven.com', 'password' =>'$2y$10$.ujSXPGEqKgffOHVDsxeHuDaXrHc0BmXepucl.X0IaA4nzE97E9yO', 'image'=>'', 'status'=>'1'],
        ];
        Admin::insert($adminRecords);
    }
}
