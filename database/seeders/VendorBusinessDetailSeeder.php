<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsBusinessDetails;

class VendorBusinessDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorRecords = [
            ['id' => 1, 'vendor_id' => 1, 'shop_name'=>'Iya Tao Olounje','shop_address' => 'Beside Tech4DevAJilosun', 'shop_mobile' => '09088877666', 'shop_email' => 'iyatao@ounje.com', 'shop_town' => 'Ado', 'shop_website' => 'ppppp.com', 'shop_pincode' => '2345',],
        ];
        VendorsBusinessDetails::insert($vendorRecords);
    }
}
