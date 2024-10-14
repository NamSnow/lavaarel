<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\VipPackage;

class VipPackageSeeder extends Seeder
{
    public function run()
    {
        $packages = [
            ['package_name' => 'Basic VIP', 'price' => 9.99],
            ['package_name' => 'Standard VIP', 'price' => 14.99],
            ['package_name' => 'Premium VIP', 'price' => 19.99],
        ];

        foreach ($packages as $package) {
            VipPackage::create($package);
        }
    }
}