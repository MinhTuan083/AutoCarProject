<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InvoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('invoices')->insert([
                'customer_name' => 'Customer ' . ($i + 1),
                'total_amount' => rand(100, 1000),
                'due_date' => now()->addDays(rand(1, 30)),
                'status' => ['unpaid', 'paid', 'pending'][rand(0, 2)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
