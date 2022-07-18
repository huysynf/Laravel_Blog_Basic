<?php

namespace App\Services;

use App\Repositories\PostRepository;

class PostService
{
    protected PostRepository $postRepository;

    /**
     * @param PostRepository $postRepository
     */
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function search($request)
    {
        $dataSearch['quantity'] = 10;

        return $this->postRepository->search($dataSearch);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function findOrFail($id)
    {
        return $this->postRepository->findOrFail($id);
    }

    /**
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        $dataCreate = $request->all();
        $dataCreate['user_id'] = auth()->user()->id;
        $post = $this->postRepository->create($dataCreate);
        $post->assignCategories($request->category_ids);

        return $post;
    }

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function update($request, $id)
    {
        $post = $this->postRepository->findOrFail($id)->load('categories');
        $post->update($request->all());
        $post->assignCategories($request->category_ids);

        return $post;
    }

    /**
     * @return array|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function all()
    {
        return $this->postRepository->all();
    }
}
