<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            $newComic = new Comic();
            $newComic["slug"] = Str::slug($comic["title"]);
            $newComic->fill($comic); // $fillable nel Model
            $newComic->save();
        }
    }
}


