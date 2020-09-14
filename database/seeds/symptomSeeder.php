<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class symptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('symptoms')->insert([
            "name"=>'Pulpitis',
            "namear"=>'التهاب العصب'
      ]);
      DB::table('symptoms')->insert([
          "name"=>'periodontitis',
          "namear"=>'التهاب اللثة'
    ]);
    DB::table('symptoms')->insert([
      "name"=>'Deep pockets',
      "namear"=>'الحالات العميقة'
   ]);
    }
}
