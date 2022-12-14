<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\WebsiteSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $websites = new WebsiteSeeder();
        $websites->run();

        $users = new UserSeeder();
        $users->run();

        $subscribers = new SubscriberSeeder();
        $subscribers->run();

        $subscriptions = new SubscriptionSeeder();
        $subscriptions->run();
    }
}
