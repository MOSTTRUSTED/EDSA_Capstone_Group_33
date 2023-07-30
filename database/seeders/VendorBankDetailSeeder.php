<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\VendorsBankDetails;


class VendorBankDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendorRecords = [
            ['id' => 1, 'vendor_id' => 1, 'account_holder_name' => 'Iya Tao', 'bank_name' => 'Tech4Dev', 'account_number' => '000006666',],
        ];
        VendorsBankDetails::insert($vendorRecords);
    }
}
