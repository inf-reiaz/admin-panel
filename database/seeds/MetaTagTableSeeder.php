<?php

use Illuminate\Database\Seeder;

class MetaTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('metas')->insert([
            [
                'author'        => 'Abdul Halim Reiaz',
                'keywords'      => 'laravel ,php ,html ,html 5 ,css ,css3 ,javaScript,Node Js ,Vue Js.',
                'description'   => 'Abdul Halim Reiaz web Devoloper.Email:reiazbubt@gmail.com'
            ]
        ]);
    }
}
