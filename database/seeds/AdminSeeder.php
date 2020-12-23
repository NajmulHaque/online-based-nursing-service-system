<?php

use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Null_;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'newAdmin',
            'email' => 'newadmin@admin.com',
            'gender' => 'male',
            'role_id' => 3,
            'nid' => 678756847,
            'nid_pic' => Null,
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
            'approved_at' => now(),
        ]);
    }
    // php artisan db:seed --class=AdminSeeder
}
