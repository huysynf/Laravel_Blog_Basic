<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository extends BaseRepository
{

    public function model()
    {
        return Category::class;
    }

    public function search($dataSearch)
    {
        return $this->model->paginate(10);
    }

    public function getParents()
    {
        return $this->model->with('parent')->withoutChild()->get(['id', 'name']);
    }
}
