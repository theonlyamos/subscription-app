<?php

namespace Database\Seeders;

use App\Models\Subscriptions;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subscriptions::create([
            'website_id'=> 1,
            'subscriber_id' => 1
        ]);
    }
}
