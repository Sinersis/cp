<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents(public_path('issues.json'));
        $data = json_decode($file, true);

        foreach ($data as $item) {

            $row = new \App\Post([
                'title' => $item['title'],
                'body' => $item['body'],
                'slug' => \Illuminate\Support\Str::slug($item['title']),
                'initiator_id' => 2
            ]);

            $row->save();

            foreach ($item['tags'] as $tag) {
                $row->tags()->create([
                    'name' => $tag,
                    'slug' => \Illuminate\Support\Str::slug($tag),
                ]);
            }

        }
    }
}
