@extends('backend.layouts.app')

@section('menu', 'Portfolio')
@section('title', 'Edit Portfolio')

@section('content')
    <div class="row">
        <div class="col">
            <!-- Form basic -->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="fw-bold">@yield('title')</h6>
                </div>
                <form action="{{ route('portfolio.update', ['id' => $portfolio->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Jabatan</label>
                            <input type="text" name="title" class="form-control form-control-sm" value="{{ $portfolio->title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Image</label>
                            <input name="image" type="file" class="form-control form-control-sm" value="{{ $portfolio->image }}">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="3">{{ $portfolio->description }}</textarea>
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