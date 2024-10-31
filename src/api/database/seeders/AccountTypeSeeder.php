<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $account_types = [
            [
                'name' => 'General',
                'slug' => 'general',
                'created_at' => now()
            ],
            [
                'name' => 'Saving',
                'slug' => 'saving',
                'created_at' => now()
            ],
            [
                'name' => 'Cash',
                'slug' => 'cash',
                'created_at' => now()
            ],
            [
                'name' => 'Loan',
                'slug' => 'loan',
                'created_at' => now()
            ],
            [
                'name' => 'Credit Card',
                'slug' => 'credit-card',
                'created_at' => now()
            ],
            [
                'name' => 'Investment',
                'slug' => 'investment',
                'created_at' => now()
            ],
            [
                'name' => 'Bonus',
                'slug' => 'bonus',
                'created_at' => now()
            ],
            [
                'name' => 'Other',
                'slug' => 'other',
                'created_at' => now()
            ],
        ];

        foreach ($account_types as $account_type) {
            \App\Models\AccountType::create($account_type);
        }
    }
}
