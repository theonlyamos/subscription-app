<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Website;

class WebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Website::create([
            'name'=> 'Daily Mail',
            'url' => 'https://dailymail.com'
        ]);
        Website::create([
            'name'=> "Delilah's Kitchen",
            'url' => 'https://kitchenofdelilah.com'
        ]);
        Website::create([
            'name'=> 'Everytihng Football',
            'url' => 'https://everythingfootball.blog'
        ]);
        Website::create([
            'name'=> 'Morning Gossip',
            'url' => 'https://morninggossip.com'
        ]);
        Website::create([
            'name'=> 'Tech News',
            'url' => 'https://technews.com'
        ]);
    }
}
