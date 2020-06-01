<?php

use Illuminate\Database\Seeder;

class GenderTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mngGenderType')->insert([
            'genderDescription' => 'Masculino',
            'statusType_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')

        ]);

        DB::table('mngGenderType')->insert([
            'genderDescription' => 'Femenino',
            'statusType_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
