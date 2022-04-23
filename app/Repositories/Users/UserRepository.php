<?php

namespace App\Repositories\Users;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{

    /**
     * @return string
     */
    public function model():string
    {
        return User::class;
    }

    public function findWithEmail($email)
    {
        return $this->model->withEmail($email)->first();
    }
}
