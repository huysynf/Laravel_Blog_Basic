<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Categories\CreateCategoryRequest;
use App\Http\Requests\Categories\UpdateCategoryRequest;
use App\Http\Requests\Posts\CreatePostRequest;
use App\Services\CategoryService;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected CategoryService $categoryService;

    protected PostService $postService;

    /**
     * @param CategoryService $categoryService
     * @param PostService $postService
     */
    public function __construct(CategoryService $categoryService, PostService $postService)
    {
        $this->categoryService = $categoryService;
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        $posts = $this->postService->search($request);

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryService->all();

        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        $post = $this->postService->create($request);

        return redirect()->route('admin.posts.index')->with(['message' => 'create new category: '.$post->name.' success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->postService->findOrFail($id);
        $categories = $this->categoryService->all();

        return view('admin.posts.edit', compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CreatePostRequest $request, $id): \Illuminate\Http\RedirectResponse
    {
        $post = $this->postService->update($request, $id);

        return redirect()->route('admin.posts.index')->with(['message' => 'Update  : '.$post->name.' success']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->postService->findOrFail($id);

        $category->delete();

        return redirect()->route('admin.posts.index')->with(['message' => 'Delete  category: '.$category->name.' success']);
    }
}
