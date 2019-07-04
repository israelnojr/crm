<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('users')->delete();
        
        DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'name' => 'User Admin',
                'email' => 'israeliloba@gmail.com',
                'username' => 'admin',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$UT588gUGlxaqTOTADPJCE.BK7JCvkp4M.cvnKkc0JjyCacTV9Tdkm',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2017-11-21 16:07:22',
                'updated_at' => '2018-09-22 23:34:02',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'verification_code' => NULL,
                'verified' => 1,
            ),

            1 => 
            array (
                'id' => 2,
                'role_id' => 2,
                'name' => 'Wave Admin',
                'email' => 'admin@admin.com',
                'username' => 'admin-1',
                'avatar' => 'users/default.png',
                'password' => '$2y$10$L8MjmjVVOCbyLHbp7pq/9.1ZEEa5AqE67ZXLd2M4.res05a3Rz/G2',
                'remember_token' => '4oXDVo48Lm1pc4j7NkWI9cMO4hv5OIEJFMrqjSCKQsIwWMGRFYDvNpdioBfo',
                'settings' => NULL,
                'created_at' => '2017-11-21 16:07:22',
                'updated_at' => '2018-09-22 23:34:02',
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'verification_code' => NULL,
                'verified' => 2,
            ),
        ));
        
        
    }
}