<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryfaiconsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categoryfaicons')->delete();
        
        \DB::table('categoryfaicons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Solid',
                'class' => 'fas',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Regular',
                'class' => 'far',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ligth',
                'class' => 'fal',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Brands',
                'class' => 'fab',
            ),
        ));
        
        
    }
}