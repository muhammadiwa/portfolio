@extends('backend.layouts.app')
@section('menu', 'Skill')
@section('title', 'Tambah Skill')

@section('content')
    <div class="row">
        <div class="col">
            <!-- Form basic -->
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="fw-bold">@yield('title')</h6>
                </div>
                <form action="{{ route('skill.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Skill</label>
                            <input type="text" name="title" class="form-control form-control-sm">
                        </div>
                        <div class="form-group mb-3">
                            <label for="progres">Progres</label>
                            <input type="text" name="progres" class="form-control" id="progres" rows="3">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" id="description" rows="3"></textarea>
                        </div>
                        <div class="float-end mb-3">
                            <button class="btn btn-primary me-1 btn-md" type="submit">Submit</button>
                            <button class="btn btn-secondary btn-md" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection