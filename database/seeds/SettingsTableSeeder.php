<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     
    public function run()
    {
        
        DB::table('settings')->insert([
            [
                'app_name'              => 'Admin Panel',
                'app_author'            => 'Abdul Halim Reiaz',
                'app_type'              => 'Admin Application', 
                'app_vishon'            => 'Full Admin Panel Devolopment.', 
                'meta_author'           => 'Abdul Halim Reiaz Email: reiazbubt@gmail.com; Phone: +880-1768-09-10-74.', 
                'meta_description'      => 'Abdul Halim Reiaz web Devoloper(reiazbubt@gmail.com).', 
                'meta_keywords'         => 'laravel, php, html5, css3,java,wordpress.', 
                'address'               => 'Iberahim Pur, Mirpur-14,Dhaka-1206', 
                'postcode'              => '1230', 
                'city'                  => 'Dhaka', 
                'country'               => 'Bangladesh', 
                'contact'               => '01768091074', 
                'mail'                  => 'reiazbubt@gmail.com', 
                'logo'                  => '/public/img/settings/logo.png'
            ]
        ]);
        
    }
}
