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
        $department = [
            'Департамент CRM и развития цифровых каналов продаж',
            'Департамент коммуникаций и маркетинга',
            'Департамент по управлению цифровыми активами',
            'Департамент розничных продаж',
            'Департамент банковских карт',
            'Департамент розничных продаж и премиального бизнеса',
            'Департамент информационных технологий общебанковских процессов',
            'Департамент по работе с персоналом',
            'Департамент развития омниканальной коммуникации',
            'Департамент информационных технологий корпоративного бизнеса',
            'Департамент стандартных расчетных продуктов',
            'Департамент рисков розничного бизнеса',
            'Юридический департамент',
            'Департамент малого и среднего бизнеса',
            'Департамент клиентского сервиса',
            'Департамент по работе с ключевыми проектами',
            'Департамент процессинга и платежных технологий',
            'Департамент анализа данных',
        ];

        foreach ($department as $item) {

            $row = new Department([
                'title' => $item,
                'slug' => Str::slug($item)
            ]);

            $row->save();

        }
    }
}
