<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'page_name' => 'index',
                'title' => 'главная'
            ],
            [
                'page_name' => 'about',
                'title' => 'о нас'
            ],
            [
                'page_name' => 'contacts',
                'title' => 'контакты'
            ],
            [
                'page_name' => 'service',
                'title' => 'сервис'
            ],
            [
                'page_name' => 'equipment',
                'title' => 'оборудование'
            ],
            [
                'page_name' => 'calculate',
                'title' => 'калькулятор'
            ],
        ];
        DB::table('seo')->insert($pages);
    }
}
