<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payment_types = [
            [
                'name' => 'Cash',
                'slug' => 'cash',
                'created_at' => now()
            ],
            [
                'name' => 'Debit Card',
                'slug' => 'debit-card',
                'created_at' => now()
            ],
            [
                'name' => 'Credit Card',
                'slug' => 'credit-card',
                'created_at' => now()
            ],
            [
                'name' => 'Bank Transfer',
                'slug' => 'bank-transfer',
                'created_at' => now()
            ],
            [
                'name' => 'Voucher',
                'slug' => 'voucher',
                'created_at' => now()
            ],
            [
                'name' => 'Mobile Payment',
                'slug' => 'mobile-payment',
                'created_at' => now()
            ],
            [
                'name' => 'Web Payment',
                'slug' => 'web-payment',
                'created_at' => now()
            ],
            [
                'name' => 'Other',
                'slug' => 'other',
                'created_at' => now()
            ]
        ];

        foreach ($payment_types as $payment_type) {
            \App\Models\PaymentType::create($payment_type);
        }
    }
}
