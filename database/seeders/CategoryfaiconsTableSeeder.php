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
                'class' => 'fas',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 1,
                'name' => 'Solid',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'class' => 'far',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 2,
                'name' => 'Regular',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'class' => 'fal',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 3,
                'name' => 'Ligth',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'class' => 'fad',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 4,
                'name' => 'Duotone',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'class' => 'fab',
                'created_at' => NULL,
                'deleted_at' => NULL,
                'id' => 5,
                'name' => 'Brands',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}