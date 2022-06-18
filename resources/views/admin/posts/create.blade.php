@extends('admin.layouts.app')
@section('title', 'Create Post')

@section('content')
    <div class="row min-vh-80">
        <div class=" col-12 m-auto">
            <h3 class="mt-3 mb-0 text-center">Add new post</h3>
            <p class="lead font-weight-normal opacity-8 mb-7 text-center">This information will let us know more about you.</p>
            <div class="card">
                <div class="card-body">
                    <form class="multisteps-form__form" style="height: 391px;" method="post" action="{{route('admin.posts.store')}}">
                        @csrf

                        <div class="row mt-3">
                            <div class="col-12 ">
                                <div class="input-group input-group-dynamic">
                                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                                    <input value="{{old('name')}}" class="multisteps-form__input form-control" type="text" name="name" onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                                @error('name')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="input-group input-group-static mt-4">
                                <label  class="ms-0">Category</label>
                                <select class="form-control" name = "category_ids[]">
                                    <option value="">Category</option>
                                    @foreach($categories as $item)
                                        <option  value="{{$item->id}}"> {{$item->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_ids')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="col-12 ">

                                    <label  class="form-label">Content</label>
                                    <textarea  class="multisteps-form__input form-control editor" type="text" name="content" onfocus="focused(this)" onfocusout="defocused(this)">
                                            {{old('content')}}
                                    </textarea>
                                @error('content')
                                <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>


                        </div>
                        <div class="form-group mt-3">
                            <button  class="btn bg-gradient-primary btn-sm mb-0" >Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('plugin/ckeditor5/build/ckeditor.js')}}"></script>
    <script src="{{ asset('ckfinder_php_3.5.3/ckfinder/ckfinder.js') }}"></script>
    <script src="{{asset('admin/js/post/post.js')}}"></script>
@endsection
