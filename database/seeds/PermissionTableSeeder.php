<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('permissions')->insert([
            ["id" => "1", "name" => "App\Http\Controllers\DashboardController@getDashboard"],
            ["id" => "2", "name" => "App\Http\Controllers\UsersController@getAllUser"],
            ["id" => "3", "name" => "App\Http\Controllers\UsersController@getBlockUser"],
            ["id" => "4", "name" => "App\Http\Controllers\UsersController@getBlockUsers"],
            ["id" => "5", "name" => "App\Http\Controllers\UsersController@getSubscriber"],
            ["id" => "6", "name" => "App\Http\Controllers\UsersController@getUserCreate"],
            ["id" => "7", "name" => "App\Http\Controllers\UsersController@roleToPremissions"],
            ["id" => "8", "name" => "App\Http\Controllers\MyProfile@getEditProfile"],
            ["id" => "9", "name" => "App\Http\Controllers\MyProfile@getProfile"],
            ["id" => "10", "name" => "App\Http\Controllers\MyProfile@changePassword"],
            ["id" => "11", "name" => "App\Http\Controllers\PermissionController@create"],
            ["id" => "12", "name" => "App\Http\Controllers\PermissionController@show"],
            ["id" => "13", "name" => "App\Http\Controllers\PermissionController@edit"],
            ["id" => "14", "name" => "App\Http\Controllers\RolesController@create"],
            ["id" => "15", "name" => "App\Http\Controllers\RolesController@show"],
            ["id" => "16", "name" => "App\Http\Controllers\RolesController@edit"],
        ]);
    }
}
