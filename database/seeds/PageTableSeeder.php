<?php

use Illuminate\Database\Seeder;
use App\Page;
use App\Tag;

class PageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('pages')->delete();
        DB::table('tags')->delete();

        for ($i=0; $i < 10; $i++) {
            Page::create([
                'title'   => 'Title '.$i,
                'slug'    => 'first-page',
                'body'    => 'Body '.$i,
                'user_id' => 1,
            ]);
        }

        for ($i=0; $i < 3; $i++) {
            Tag::create([
                'name'   => 'Tag_'.$i,
            ]);
        }
    }

}