<?php

use Illuminate\Database\Seeder;

class PermissionUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permission_user')->insert([
            [
                'permission_id'     => '1',
                'user_id'           => '1',
                'user_type'         => 'normal',
            ],
            [
                'permission_id'     => '1',
                'user_id'           => '2',
                'user_type'         => 'normal',
            ],
            [
                'permission_id'     => '1',
                'user_id'           => '3',
                'user_type'         => 'normal',
            ],
            [
                'permission_id'     => '1',
                'user_id'           => '4',
                'user_type'         => 'normal',
            ],
            [
                'permission_id'     => '1',
                'user_id'           => '5',
                'user_type'         => 'normal',
            ],
            [
                'permission_id'     => '2',
                'user_id'           => '5',
                'user_type'         => 'normal',
            ],
            [
                'permission_id'     => '2',
                'user_id'           => '1',
                'user_type'         => 'normal',
            ],
            [
                'permission_id'     => '2',
                'user_id'           => '2',
                'user_type'         => 'normal',
            ],
            [
                'permission_id'     => '3',
                'user_id'           => '2',
                'user_type'         => 'normal',
            ],
        ]);
    }
}
