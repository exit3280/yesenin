<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $today = date('Y-m-d');
    $languages = [
      [
        'name' => 'English',
        'iso_name' => 'en_US',
        'created_at' => $today
      ],[
        'name' => 'Croatian',
        'iso_name' => 'hr_HR',
        'created_at' => $today
      ]
    ];

    array_map(function($language){
      DB::table('languages')->insert($language);
    }, $languages);
  }
}
