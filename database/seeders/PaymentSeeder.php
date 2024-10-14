<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Support\Facades\Log; // Import the Log facade

class PaymentSeeder extends Seeder
{
    public function run()
    {
        // Ensure users exist before inserting payments
        $userIds = [1, 2, 3]; // Add more IDs if necessary
        $existingUsers = User::whereIn('id', $userIds)->pluck('id')->toArray();

        $payments = [
            ['user_id' => 1, 'payment_amount' => 5.99, 'payment_status' => 'approved'],
            ['user_id' => 2, 'payment_amount' => 9.99, 'payment_status' => 'approved'],
            ['user_id' => 3, 'payment_amount' => 14.99, 'payment_status' => 'pending'],
            // Add more entries as needed
        ];

        foreach ($payments as $payment) {
            // Only create payment if user exists
            if (in_array($payment['user_id'], $existingUsers)) {
                Payment::create($payment);
            } else {
                // Log a warning if the user ID does not exist
                Log::warning("User ID {$payment['user_id']} does not exist, payment not created.");
            }
        }
    }
}