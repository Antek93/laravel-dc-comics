<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\Comic;



class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comic');

        foreach ($comics as $comic) {

            $newComic = new Comic;
            $newComic->Title = $comic['title'];
            $newComic->Description = $comic['description'];
            $newComic->Thumb = $comic['thumb'];
            $newComic->Price = $comic['price'];
            $newComic->Series = $comic['series'];
            $newComic->Sale_date = $comic['sale_date'];
            $newComic->Type = $comic['type'];
            $newComic->save();
            
        }

        dd($comics);
    }
}
