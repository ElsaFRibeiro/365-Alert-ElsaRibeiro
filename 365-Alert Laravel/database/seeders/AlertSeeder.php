<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AlertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alerts')->insert([
            'id' => '81',
            'type' => 'Low Danger',
            'location' => 'Bigonville',
            'trend' => 'rest',
            'river' => 'Sûre',
            'water_level' => '0',
            'water_alert_level' => '300',
            'water_caution_level' => '250',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '79',
            'type' => 'Low Danger',
            'location' => 'Bissen',
            'trend' => 'rest',
            'river' => 'Attert',
            'water_level' => '0',
            'water_alert_level' => '250',
            'water_caution_level' => '200',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '67',
            'type' => 'Low Danger',
            'location' => 'Bollendorf',
            'trend' => 'rest',
            'river' => 'Sûre',
            'water_level' => '0',
            'water_alert_level' => '425',
            'water_caution_level' => '350',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '63',
            'type' => 'Low Danger',
            'location' => 'Diekirch',
            'trend' => 'rest',
            'river' => 'Sûre',
            'water_level' => '0',
            'water_alert_level' => '470',
            'water_caution_level' => '420',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '59',
            'type' => 'Low Danger',
            'location' => 'Ettelbruck',
            'trend' => 'rest',
            'river' => 'Wark',
            'water_level' => '0',
            'water_alert_level' => '220',
            'water_caution_level' => '190',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '61',
            'type' => 'Low Danger',
            'location' => 'Ettelbruck',
            'trend' => 'rest',
            'river' => 'Alzette',
            'water_level' => '0',
            'water_alert_level' => '230',
            'water_caution_level' => '180',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '57',
            'type' => 'Low Danger',
            'location' => 'Hesperange',
            'trend' => 'rest',
            'river' => 'Alzette',
            'water_level' => '0',
            'water_alert_level' => '280',
            'water_caution_level' => '230',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '25',
            'type' => 'Low Danger',
            'location' => 'Hunnebuer',
            'trend' => 'rest',
            'river' => 'Eisch',
            'water_level' => '0',
            'water_alert_level' => '280',
            'water_caution_level' => '235',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '53',
            'type' => 'Low Danger',
            'location' => 'Mersch',
            'trend' => 'rest',
            'river' => 'Alzette',
            'water_level' => '0',
            'water_alert_level' => '400',
            'water_caution_level' => '350',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '33',
            'type' => 'Low Danger',
            'location' => 'Pfaffenthal',
            'trend' => 'rest',
            'river' => 'Alzette',
            'water_level' => '0',
            'water_alert_level' => '270',
            'water_caution_level' => '220',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '45',
            'type' => 'Low Danger',
            'location' => 'Reichlange',
            'trend' => 'rest',
            'river' => 'Attert',
            'water_level' => '0',
            'water_alert_level' => '250',
            'water_caution_level' => '200',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '5',
            'type' => 'Low Danger',
            'location' => 'Stadtbredimus',
            'trend' => 'rest',
            'river' => 'Moselle',
            'water_level' => '0',
            'water_alert_level' => '780',
            'water_prealert_level' => '710',
            'water_caution_level' => '530',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('alerts')->insert([
            'id' => '41',
            'type' => 'Low Danger',
            'location' => 'Steinsel',
            'trend' => 'rest',
            'river' => 'Alzette',
            'water_level' => '0',
            'water_alert_level' => '350',
            'water_caution_level' => '300',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
