@extends('admin.layouts.app')
@section('title', 'Posts')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-lg-flex">
                        <div>
                            <h5 class="mb-0">Posts</h5>

                        </div>
                        <div class="ms-auto my-auto mt-lg-0 mt-4">
                            <div class="ms-auto my-auto">
                                <a href="{{route('admin.posts.create')}}" class="btn bg-gradient-primary btn-sm mb-0" >+&nbsp;
                                    New Post</a>
                                <button type="button" class="btn btn-outline-primary btn-sm mb-0" data-bs-toggle="modal"
                                        data-bs-target="#import">
                                    Import
                                </button>
                                <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog mt-lg-10">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="ModalLabel">Import CSV</h5>
                                                <i class="material-icons ms-3">file_upload</i>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>You can browse your computer for a file.</p>
                                                <div class="input-group input-group-dynamic mb-3">
                                                    <label class="form-label">Browse file...</label>
                                                    <input type="email" class="form-control" onfocus="focused(this)"
                                                           onfocusout="defocused(this)">
                                                </div>
                                                <div class="form-check is-filled">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                           id="importCheck" checked="">
                                                    <label class="custom-control-label" for="importCheck">I accept the terms
                                                        and conditions</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary btn-sm"
                                                        data-bs-dismiss="modal">Close
                                                </button>
                                                <button type="button" class="btn bg-gradient-primary btn-sm">Upload</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv"
                                        type="button" name="button">Export
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-0">
                    <div class="table-responsive">
                        <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
                            <div class="dataTable-top">
                                <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                        </select> entries per page</label></div>
                                <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..."
                                                                     type="text"></div>
                            </div>
                            <div class="dataTable-container">
                                <table class="table table-flush dataTable-table" id="products-list">
                                    <thead class="thead-light">
                                    <tr>
                                        <th data-sortable="" style="width: 38.2671%;"><a href="#" class="dataTable-sorter">Name</a>
                                        </th>
                                        <th data-sortable="" style="width: 10.5596%;"><a href="#" class="dataTable-sorter">Category Parent</a>
                                        </th>
                                        <th data-sortable="" style="width: 12.7256%;"><a href="#" class="dataTable-sorter">Action</a>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($posts as $item)
                                        <tr>

                                            <td class="text-sm">{{$item->name}}</td>
                                            <td class="text-sm">0</td>

                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                   data-bs-original-title="Preview product">
                                                    <i class="material-icons text-secondary position-relative text-lg">visibility</i>
                                                </a>
                                                <a href="{{route('admin.posts.edit', $item->id)}}" class="mx-3" data-bs-toggle="tooltip"
                                                   data-bs-original-title="Edit product">
                                                    <i class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                   data-bs-original-title="Delete product">
                                                    <i class="material-icons text-secondary position-relative text-lg">delete</i>
                                                </a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <div class="dataTable-bottom">
                                {{$posts->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
