<?php

use App\Prefectures;
use Illuminate\Database\Seeder;


class PrefecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->truncate();
        DB::table('prefectures')->insert([
            [
                'pref' => '東京都',
                'city' => '東京',
            ],
            [
                'pref' => '埼玉県',
                'city' => 'さいたま市',
            ],
            [
                'pref' => '神奈川県',
                'city' => '横浜市',
            ],
            [
                'pref' => '栃木県',
                'city' => '宇都宮市',
            ],
            [
                'pref' => '茨城県',
                'city' => '水戸市',
            ],
            [
                'pref' => '千葉県',
                'city' => '千葉市',
            ],
        ]);
        //
    }
}
