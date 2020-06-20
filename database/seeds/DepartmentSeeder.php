<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::query()->truncate();

        $file = file_get_contents(public_path('departments.json'));
        $department = json_decode($file, true);

        foreach ($department as $item) {

            $row = new Department([
                'name' => $item['name'],
                'slug' => Str::slug($item['name'])
            ]);

            $row->save();
            foreach ($item['tags'] as $tag) {
                $row->keys()->create([
                    'name' => $tag,
                    'slug' => Str::slug($tag)
                ]);
            }

        }
    }
}
