<?php

namespace Database\Seeders;

use App\Models\Handset;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HandsetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Handset::insert([
        'name'=>'Galaxy S25','brand'=>'Samsung','price'=>999,'release_date'=>'2025-01-01','features'=>json_encode(['5G','OLED']),
        'name'=>'iPhone 17','brand'=>'Apple','price'=>1199,'release_date'=>'2025-09-01','features'=>json_encode(['5G','FaceID']),
        'name'=>'Pixel 10','brand'=>'Google','price'=>799,'release_date'=>'2025-03-01','features'=>json_encode(['5G','WideLens']),
         'name'=>'Xperia Z4','brand'=>'Sony','price'=>699,'release_date'=>'2024-11-01','features'=>json_encode(['Waterproof']),
         'name'=>'Moto G Power','brand'=>'Motorola','price'=>249,'release_date'=>'2024-06-01','features'=>json_encode(['Big Battery']),
         'name'=>'OnePlus 14','brand'=>'OnePlus','price'=>649,'release_date'=>'2025-04-01','features'=>json_encode(['120Hz']),
         'name'=>'Redmi Note 14','brand'=>'Xiaomi','price'=>199,'release_date'=>'2024-09-01','features'=>json_encode(['Dual SIM']),
         'name'=>'Nord 5','brand'=>'OnePlus','price'=>349,'release_date'=>'2024-08-01','features'=>json_encode(['Budget']),
         'name'=>'Poco X6','brand'=>'Poco','price'=>279,'release_date'=>'2024-10-01','features'=>json_encode(['Gaming']),
         'name'=>'Zenfone 12','brand'=>'Asus','price'=>559,'release_date'=>'2025-01-25','features'=>json_encode(['Stereo']),
            
        ]);
    
    }
}
