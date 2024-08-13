<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subscriptions')->insert([
            [
                'title' => 'Class-Prime',
                'price' => 10,
                'cycle' => 'monthly',
                'lookup_key' => 'class-Prime',
                'created_at' => Carbon::now(),
            ],
            /*
                [
                    'title' => 'VIP-Prime',
                    'price' => 15,
                    'cycle' => 'monthly',
                    'lookup_key' => 'LOOKUP KEY',
                    'created_at' => Carbon::now(),
                ],
            */
        ]);
    }
}
