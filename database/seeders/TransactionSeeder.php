<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        // Transaction types
        $types = ['income', 'expense'];

        // Transaction categories
        $incomeCategories = ['wage', 'bonus', 'gift'];
        $expenseCategories = ['food & drinks', 'shopping', 'charity', 'housing', 'insurance', 'taxes', 'transportation'];

        // Seed 50 income transactions
        for ($i = 0; $i < 50; $i++) {
            Transaction::create([
                'amount' => rand(100, 1000),
                'type' => 'income',
                'category' => $incomeCategories[array_rand($incomeCategories)],
                'notes' => 'Income transaction ' . ($i + 1),
                'created_at' => now()->subDays($i),
            ]);
        }

        // Seed 50 expense transactions
        for ($i = 0; $i < 50; $i++) {
            Transaction::create([
                'amount' => rand(10, 200),
                'type' => 'expense',
                'category' => $expenseCategories[array_rand($expenseCategories)],
                'notes' => 'Expense transaction ' . ($i + 1),
                'created_at' => now()->subDays($i),
            ]);
        }
    }
}
