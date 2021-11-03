<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primary_categories')->insert([
            [
                'name' => "キッチン",
                'sort_order' => 1,
            ],
            [
                'name' => "ホール",
                'sort_order' => 2,
            ],
            [
                'name' => "パティシエ",
                'sort_order' => 3,
            ],
        ]);

        DB::table('secondary_categories')->insert([
            [
                'name' => "和食",
                'sort_order' => 1,
                'primary_category_id' => 1,
            ],
            [
                'name' => "フレンチ",
                'sort_order' => 2,
                'primary_category_id' => 1,
            ],
            [
                'name' => "イタリアン",
                'sort_order' => 3,
                'primary_category_id' => 1,
            ],
            [
                'name' => "サービススタッフ",
                'sort_order' => 4,
                'primary_category_id' => 2,
            ],
            [
                'name' => "ソムリエ",
                'sort_order' => 5,
                'primary_category_id' => 2,
            ],
            [
                'name' => "レジ・販売",
                'sort_order' => 6,
                'primary_category_id' => 2,
            ],
            [
                'name' => "成形",
                'sort_order' => 7,
                'primary_category_id' => 3,
            ],
            [
                'name' => "仕込み",
                'sort_order' => 8,
                'primary_category_id' => 3,
            ],
            [
                'name' => "仕上げ",
                'sort_order' => 9,
                'primary_category_id' => 3,
            ],
        ]);
    }
}
