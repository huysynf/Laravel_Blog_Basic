<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name' => 'Chuyện tuần',
            ],
            [
                'name' => 'Tôi đã học chứng chỉ như thế nào',
            ],
        ];

        Category::insert($category);
    }
}
