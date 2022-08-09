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

    /**
     * Save a new entity in repository
     * @param array $input
     * @return
     */
    public function create(array $input)
    {
        return $this->model->create($input);
    }

    /**
     * Update a entity in repository by id
     * @param array $input
     * @param $id
     * @return BaseRepository
     */
    public function update(array $input, $id): self
    {
        $model = $this->model->findOrFail($id);
        $model->fill($input);
        $model->save();

        return $model;
    }

    /**
     * Delete a entity in repository by id
     *
     * @param $id
     *
     * @return int
     */
    public function destroy($id): int
    {
        return $this->model->destroy($id);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id): mixed
    {
        $model = $this->model->findOrFail($id);
        $model?->delete();

        return $model;
    }

}
