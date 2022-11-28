<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\tbkomponens;

class v9tbkomponens extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        tbkomponens::create(
            ['Komponens'=>'Arduino Nano','fungsi'=>'Microcontroller kendali']
        );
        tbkomponens::create(
            ['Komponens'=>'ds3231','fungsi'=>'RTC']
        );
    }
}
