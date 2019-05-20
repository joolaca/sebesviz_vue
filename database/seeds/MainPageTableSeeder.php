<?php

use Illuminate\Database\Seeder;
use Laraspace\Model\MainPage;

class MainPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        MainPage::create([
            'type' => 'recommendation_1',
            'sequence' => 1,
            'title' => 'Nézd meg mi van a konyhában',
            'btn_href' => '/gallery_example',
        ]);
        MainPage::create([
            'type' => 'recommendation_1',
            'sequence' => 2,
            'title' => 'Környékünk',
            'btn_href' => '/gallery_example',
        ]);
        MainPage::create([
            'type' => 'recommendation_1',
            'sequence' => 3,
            'title' => 'Szobáink',
            'btn_href' => '/gallery_example',
        ]);
    }
}
