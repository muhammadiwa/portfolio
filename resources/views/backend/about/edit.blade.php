@extends('backend.layouts.app')
@section('menu', 'About')
@section('title', 'Edit About')

@section('content')
    <div class="row">
        <div class="col">
            <!-- Form basic -->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="fw-bold">@yield('title')</h6>
                </div>
                <form action="{{ route('about.update', ['id' => $data->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Jabatan</label>
                            <input type="text" name="title" class="form-control form-control-sm" value="{{ $data->title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Image</label>
                            <input name="image" type="file" class="form-control form-control-sm" value="{{ $data->image }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="3" value="{{ $data->description }}"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description2">Description 2</label>
                            <textarea name="description2" class="form-control" id="description2" rows="3" value="{{ $data->description2 }}"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description3">Description 3</label>
                            <textarea name="description3" class="form-control" id="description3" rows="3" value="{{ $data->description3 }}"></textarea>
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