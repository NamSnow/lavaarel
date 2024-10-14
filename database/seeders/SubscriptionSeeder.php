<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subscription;
use App\Models\User;
use App\Models\VipPackage; // Ensure this model exists
use App\Models\Payment; // Ensure this model exists
use Illuminate\Support\Facades\Log;

class SubscriptionSeeder extends Seeder
{
    public function run()
    {
        // Define the subscriptions you want to create
        $subscriptions = [
            ['user_id' => 1, 'package_id' => 1, 'payment_id' => 1, 'start_date' => '2024-01-01', 'end_date' => '2024-02-01'],
            ['user_id' => 2, 'package_id' => 2, 'payment_id' => 2, 'start_date' => '2024-01-01', 'end_date' => '2024-02-01'],
            // Add more entries as needed
        ];

        foreach ($subscriptions as $subscription) {
            // Check if user, package, and payment exist
            $userExists = User::where('id', $subscription['user_id'])->exists();
            $packageExists = VipPackage::where('id', $subscription['package_id'])->exists();
            $paymentExists = Payment::where('id', $subscription['payment_id'])->exists();

            if ($userExists && $packageExists && $paymentExists) {
                Subscription::create($subscription);
            } else {
                // Log an error for debugging purposes
                Log::warning("Failed to create subscription for user ID {$subscription['user_id']} - " .
                             "User Exists: $userExists, Package Exists: $packageExists, Payment Exists: $paymentExists");
            }
        }
    }
}