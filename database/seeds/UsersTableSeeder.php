<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'                => 1,
                'firstname'         => 'Abdul Halim ',
                'lastname'          => 'Reiaz',
                'username'          => 'ahreiaz',
                'email'             => 'reiazbubt@gmail.com',
                'password'          => bcrypt('1234'),
                'role'              => '1',
                'country_id'        => '10',
                'city_id'           => '1',
                'postcode'          => '1206',
                'gender'            => 'male ',
                'address'           => 'Mirpur - 14',
                'parmanent_address' => 'Dhaka.',
                'user_photo'        => '/public/admin/images/me.jpg',
                'contact'           => '01831004996',
                'active'            => '1',
            ],
            [
                'id'                => 2,
                'firstname'         => 'Super',
                'lastname'          => 'Admin',
                'username'          => 'superadmin',
                'email'             => 'superadmin@app.com',
                'password'          => bcrypt('1234'),
                'role'              => '2',
                'country_id'        => '10',
                'city_id'           => '1',
                'postcode'          => '1206',
                'gender'            => 'male ',
                'address'           => 'Mirpur - 14',
                'parmanent_address' => 'Dhaka.',
                'user_photo'        => '/public/admin/images/me.jpg',
                'contact'           => '01831004997',
                'active'            => '1',
            ],
            [
                'id'                => 3,
                'firstname'         => ' ',
                'lastname'          => 'Admin',
                'username'          => 'admin',
                'email'             => 'admin@app.com',
                'password'          => bcrypt('1234'),
                'role'              => '3',
                'country_id'        => '10',
                'city_id'           => '1',
                'postcode'          => '1206',
                'gender'            => 'male ',
                'address'           => 'Mirpur - 14',
                'parmanent_address' => 'Dhaka.',
                'user_photo'        => '/public/admin/images/me.jpg',
                'contact'           => '01831004998',
                'active'            => '1',
            ],
            [
                'id'                => 4,
                'firstname'         => ' ',
                'lastname'          => 'User',
                'username'          => 'user',
                'email'             => 'user@app.com',
                'password'          => bcrypt('1234'),
                'role'              => '3',
                'country_id'        => '10',
                'city_id'           => '1',
                'postcode'          => '1206',
                'gender'            => 'male ',
                'address'           => 'Mirpur - 14',
                'parmanent_address' => 'Dhaka.',
                'user_photo'        => '/public/admin/images/me.jpg',
                'contact'           => '01831004999',
                'active'            => '1',
            ],
            
        ]);
    }
}
