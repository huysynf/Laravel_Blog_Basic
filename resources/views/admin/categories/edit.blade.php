@extends('admin.layouts.app')
@section('title', 'Update Category')

@section('content')
    <div class="row min-vh-80">
        <div class=" col-12 m-auto">
            <h3 class="mt-3 mb-0 text-center">Update Category</h3>
            <p class="lead font-weight-normal opacity-8 mb-7 text-center">This information will let us know more about you.</p>
            <div class="card">
                <div class="card-body">
                    <form class="multisteps-form__form" style="height: 391px;" method="post" action="{{route('admin.categories.update', $category->id)}}">
                        @csrf

                        <div class="row mt-3">
                            <div class="col-12 ">
                                <div class="input-group input-group-dynamic">
                                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                                    <input value="{{$category->name}}" class="multisteps-form__input form-control" type="text" name="name" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label  class="ms-0">Parent Category</label>
                                <select class="form-control" name = "parent_id">
                                    <option value="">Category</option>
                                    @foreach($parentCategories as $item)
                                        <option {{optional($category->parent)->id == $item->id ? 'selected' :''}} value="{{$item->id}}"> {{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button  class="btn bg-gradient-primary btn-sm mb-0" >Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
