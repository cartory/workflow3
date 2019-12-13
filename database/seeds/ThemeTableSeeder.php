<?php

use App\Theme;
use Illuminate\Database\Seeder;

class ThemeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theme::create([
            'backgroundColor' => 'yellow',
            'textColor' => 'black',
            'textFont' => '15',
        ]);

        Theme::create([
            'backgroundColor' => 'white',
            'textColor' => 'blue',
            'textFont' => '15',
        ]);

        Theme::create([
            'backgroundColor' => 'pink',
            'textColor' => 'blue',
            'textFont' => '15',
        ]);

        Theme::create([
            'backgroundColor' => 'green',
            'textColor' => 'blue',
            'textFont' => '15',
        ]);

        Theme::create([
            'backgroundColor' => 'blue',
            'textColor' => 'blue',
            'textFont' => '15',
        ]);

        Theme::create([
            'backgroundColor' => 'red',
            'textColor' => 'blue',
            'textFont' => '15',
        ]);
    }
}
