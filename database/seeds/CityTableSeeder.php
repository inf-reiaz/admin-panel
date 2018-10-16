<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['name' => 'Cox\'s Bazar',	'name_bn' => 'কক্সবাজার ', 'link'=>'Coxs-Bazar'],
            ['name'=> 'Barguna', 'name_bn'=>	'বরগুনা' ,'link'=>'Barguna'],
            ['name'=> 'Barisal', 'name_bn'=>	'বরিশাল' ,'link'=>'Barisal'],
            ['name'=> 'Bhola', 'name_bn'=>	'ভোলা' ,'link'=>'Bhola'],
            ['name'=> 'Jhalokati', 'name_bn'=>	'ঝালকাঠি' ,'link'=>'Jhalokati'],
            ['name'=> 'Patuakhali', 'name_bn'=>	'পটুয়াখালী' ,'link'=>'Patuakhali'],
            ['name'=> 'Pirojpur', 'name_bn'=>	'পিরোজপুর' ,'link'=>'Pirojpur'],
            ['name'=> 'Bandarban', 'name_bn'=>	'বান্দরবান' ,'link'=>'Bandarban'],
            ['name'=> 'Brahmanbaria', 'name_bn'=>	'ব্রাহ্মণবাড়ীয়া' ,'link'=>'Brahmanbaria'],
            ['name'=> 'Chandpur', 'name_bn'=>	'চাঁদপুর' ,'link'=>'Chandpur'],
            ['name'=> 'Chittagong', 'name_bn'=>	'চট্টগ্রাম' ,'link'=>'Chittagong'],
            ['name'=> 'Comilla', 'name_bn'=>	'কুমিল্লা' ,'link'=>'Comilla'],
            ['name'=> 'Feni', 'name_bn'=>	'ফেনী' ,'link'=>'Feni'],
            ['name'=> 'Khagrachhari', 'name_bn'=>	'খাগড়াছড়ি' ,'link'=>'Khagrachhari'],
            ['name'=> 'Lakshmipur', 'name_bn'=>	'লক্ষ্মীপুর' ,'link'=>'Lakshmipur'],
            ['name'=> 'Noakhali', 'name_bn'=>	'নোয়াখালী' ,'link'=>'Noakhali'],
            ['name'=> 'Rangamati', 'name_bn'=>	'রাঙ্গামাটি' ,'link'=>'Rangamati'],
            ['name'=> 'Dhaka', 'name_bn'=>	'ঢাকা' ,'link'=>'Dhaka'],
            ['name'=> 'Faridpur', 'name_bn'=>	'ফরিদপুর' ,'link'=>'Faridpur'],
            ['name'=> 'Gazipur', 'name_bn'=>	'গাজীপুর' ,'link'=>'Gazipur'],
            ['name'=> 'Gopalganj', 'name_bn'=>	'গোপালগঞ্জ' ,'link'=>'Gopalganj'],
            ['name'=> 'Kishoreganj', 'name_bn'=>	'কিশোরগঞ্জ' ,'link'=>'Kishoreganj'],
            ['name'=> 'Madaripur', 'name_bn'=>	'মাদারীপুর' ,'link'=>'Madaripur'],
            ['name'=> 'Manikganj', 'name_bn'=>	'মানিকগঞ্জ' ,'link'=>'Manikganj'],
            ['name'=> 'Munshiganj', 'name_bn'=>	'মুন্সীগঞ্জ' ,'link'=>'Munshiganj'],
            ['name'=> 'Narayanganj', 'name_bn'=>	'নারায়ণগঞ্জ' ,'link'=>'Narayanganj'],
            ['name'=> 'Narsingdi', 'name_bn'=>	'নরসিংদী' ,'link'=>'Narsingdi'],
            ['name'=> 'Rajbari', 'name_bn'=>	'রাজবাড়ী' ,'link'=>'Rajbari'],
            ['name'=> 'Shariatpur', 'name_bn'=>	'শরীয়তপুর' ,'link'=>'Shariatpur'],
            ['name'=> 'Tangail', 'name_bn'=>	'টাঙ্গাইল' ,'link'=>'Tangail'],
            ['name'=> 'Bagerhat', 'name_bn'=>	'বাগেরহাট' ,'link'=>'Bagerhat'],
            ['name'=> 'Chuadanga', 'name_bn'=>	'চুয়াডাঙ্গা' ,'link'=>'Chuadanga'],
            ['name'=> 'Jessore', 'name_bn'=>	'যশোর' ,'link'=>'Jessore'],
            ['name'=> 'Jhenaidah', 'name_bn'=>	'ঝিনাইদহ' ,'link'=>'Jhenaidah'],
            ['name'=> 'Khulna', 'name_bn'=>	'খুলনা' ,'link'=>'Khulna'],
            ['name'=> 'Kushtia', 'name_bn'=>	'কুষ্টিয়া' ,'link'=>'Kushtia'],
            ['name'=> 'Magura', 'name_bn'=>	'মাগুরা' ,'link'=>'Magura'],
            ['name'=> 'Meherpur', 'name_bn'=>	'মেহেরপুর' ,'link'=>'Meherpur'],
            ['name'=> 'Narail', 'name_bn'=>	'নড়াইল' ,'link'=>'Narail'],
            ['name'=> 'Satkhira', 'name_bn'=>	'সাতক্ষিরা' ,'link'=>'Satkhira'],
            ['name'=> 'Jamalpur', 'name_bn'=>	'জামালপুর' ,'link'=>'Jamalpur'],
            ['name'=> 'Mymensingh', 'name_bn'=>	'ময়মনসিংহ' ,'link'=>'Mymensingh'],
            ['name'=> 'Netrakona', 'name_bn'=>	'নেত্রকোনা' ,'link'=>'Netrakona'],
            ['name'=> 'Sherpur', 'name_bn'=>	'শেরপুর' ,'link'=>'Sherpur'],
            ['name'=> 'Bogra', 'name_bn'=>	'বগুড়া' ,'link'=>'Bogra'],
            ['name'=> 'Joypurhat', 'name_bn'=>	'জয়পুরহাট' ,'link'=>'Joypurhat'],
            ['name'=> 'Naogaon', 'name_bn'=>	'নওগাঁ' ,'link'=>'Naogaon'],
            ['name'=> 'Natore', 'name_bn'=>	'নাটোর' ,'link'=>'Natore'],
            ['name'=> 'Chapainawabganj', 'name_bn'=>	'নওয়াবগঞ্জ' ,'link'=>'Chapainawabganj'],
            ['name'=> 'Pabna', 'name_bn'=>	'পাবনা' ,'link'=>'Pabna'],
            ['name'=> 'Rajshahi', 'name_bn'=>	'রাজশাহী' ,'link'=>'Rajshahi'],
            ['name'=> 'Sirajgonj', 'name_bn'=>	'সিরাজগঞ্জ' ,'link'=>'Sirajgonj'],
            ['name'=> 'Dinajpur', 'name_bn'=>	'দিনাজপুর' ,'link'=>'Dinajpur'],
            ['name'=> 'Gaibandha', 'name_bn'=>	'গাইবান্ধা' ,'link'=>'Gaibandha'],
            ['name'=> 'Kurigram', 'name_bn'=>	'কুড়িগ্রাম' ,'link'=>'Kurigram'],
            ['name'=> 'Lalmonirhat', 'name_bn'=>	'লালমনিরহাট' ,'link'=>'Lalmonirhat'],
            ['name'=> 'Nilphamari', 'name_bn'=>	'নীলফামারী' ,'link'=>'Nilphamari'],
            ['name'=> 'Panchagarh', 'name_bn'=>	'পঞ্চগড়' ,'link'=>'Panchagarh'],
            ['name'=> 'Rangpur', 'name_bn'=>	'রংপুর' ,'link'=>'Rangpur'],
            ['name'=> 'Thakurgaon', 'name_bn'=>	'ঠাকুরগাঁও' ,'link'=>'Thakurgaon'],
            ['name'=> 'Habiganj', 'name_bn'=>	'হবিগঞ্জ' ,'link'=>'Habiganj'],
            ['name'=> 'Moulvibazar', 'name_bn'=>	'মৌলভীবাজার' ,'link'=>'Moulvibazar'],
            ['name'=> 'Sunamganj', 'name_bn'=>	'সুনামগঞ্জ' ,'link'=>'Sunamganj'],
            ['name'=> 'Sylhet', 'name_bn'=>	'সিলেট' ,'link'=>'Sylhet'],

        ]);
    }
}
