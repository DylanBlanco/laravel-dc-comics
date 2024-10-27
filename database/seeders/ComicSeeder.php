<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comic::truncate();

        $comics = config('comics');

        foreach ($comics as $singleComic) {
            $comic = new Comic();
            $comic->title = $singleComic['title'];
            $comic->description = $singleComic['description'];
            $comic->thumb = $singleComic['thumb'];
            $priceNumber = floatval(substr($singleComic['price'], 1));
            $comic-> price = $priceNumber;
            $comic-> series = $singleComic['series'];
            $comic-> sale_date = $singleComic['sale_date'];
            $comic-> type = $singleComic['type'];
            $comic->artists = json_encode($singleComic['artists']);
            $comic->writers = json_encode($singleComic['writers']);
            
            $comic->save();
        }
    }
}
