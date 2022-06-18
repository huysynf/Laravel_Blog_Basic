<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    protected CategoryRepository $categoryRepository;

    /**
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function search($request)
    {
        $dataSearch['quantity'] = 10;
        return $this->categoryRepository->search($dataSearch);
    }
    /**
     * @param $id
     * @return mixed
     */
    public function findOrFail($id)
    {
        return $this->categoryRepository->findOrFail($id);
    }

    /**
     * @param $request
     * @return mixed
     */
    public function create($request)
    {
        $category = $this->categoryRepository->create($request->all());
        $category->syncSlug($category->name);
        return $category;
    }

    /**
     * @return mixed
     */
    public function getParents()
    {
        return $this->categoryRepository->getParents();
    }

    /**
     * @param $request
     * @param $id
     * @return mixed
     */
    public function update($request, $id)
    {
        $category = $this->categoryRepository->findOrFail($id);
        $category->update($request->all());
        $category->syncSlug($category->name);
        return $category;
    }
}
