<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Post;

class PostRepository extends BaseRepository
{

    public function model()
    {
        return Post::class;
    }

    public function search($dataSearch)
    {
        return $this->model->paginate(10);
    }
}
