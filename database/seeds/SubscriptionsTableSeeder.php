<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('subscriptions')->delete();
        
        
        
    }
}