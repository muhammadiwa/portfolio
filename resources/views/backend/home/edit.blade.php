@extends('backend.layouts.app')
@section('menu', 'Home')
@section('title', 'Edit Home')

@section('content')
    <div class="row">
        <div class="col">
            <!-- Form basic -->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="fw-bold">@yield('title')</h6>
                </div>
                <form action="{{ url('admin/home/update') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Full Name</label>
                            <input type="text" name="name" value="{{ $data->name }}" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" value="{{ $data->description }}" class="form-control" id="description" rows="3"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Image</label>
                            <input name="image" value="{{ $data->image }}" type="file" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Instagram</label>
                            <input name="instagram" value="{{ $data->instagram }}" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Linkedin</label>
                            <input name="linkedin" value="{{ $data->linkedin }}" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Twitter</label>
                            <input name="twitter" value="{{ $data->twitter }}" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Github</label>
                            <input name="github" value="{{ $data->github }}" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label>Facebook</label>
                            <input name="facebook" value="{{ $data->facebook }}" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="float-end mb-3">
                            <button class="btn btn-primary me-1 btn-md" type="submit">Update</button>
                            <button class="btn btn-secondary btn-md" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection