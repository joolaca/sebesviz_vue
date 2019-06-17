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

        $gallery_example_url = '/gallery_example';

        MainPage::create([
            'type' => 'recommendation_1',
            'sequence' => 1,
            'img' => '/assets/front/img/main/example/food.png',
            'title' => 'Nézd meg mi van a konyhában',
            'btn_href' => $gallery_example_url,
        ]);
        MainPage::create([
            'type' => 'recommendation_1',
            'sequence' => 2,
            'img' => '/assets/front/img/main/example/region.png',
            'title' => 'Környékünk',
            'btn_href' => $gallery_example_url,
        ]);
        MainPage::create([
            'type' => 'recommendation_1',
            'sequence' => 3,
            'img' => '/assets/front/img/main/example/rooms.png',
            'title' => 'Szobáink',
            'btn_href' => $gallery_example_url,
        ]);

        /****************************************
         * recommendation_2
         ****************************************/

        MainPage::create([
            'type' => 'recommendation_2',
            'sequence' => 1,
            'img' => '/assets/front/img/main/letter_bubble.png',
            'title' => 'Esős napokra, menő klubszobánk van',
            'btn_href' => $gallery_example_url,
        ]);
        MainPage::create([
            'type' => 'recommendation_2',
            'sequence' => 2,
            'img' => '/assets/front/img/main/book_bubble.png',
            'title' => 'Vendégnaplónk',
            'btn_href' => $gallery_example_url,
        ]);
        MainPage::create([
            'type' => 'recommendation_2',
            'sequence' => 3,
            'img' => '/assets/front/img/main/bird_bubble.png',
            'title' => 'Tanösvényünk',
            'btn_href' => $gallery_example_url,
        ]);
    }
}
