@extends('backend.layouts.app')
@section('menu', 'Home')
@section('title', 'Tambah Home')
@section('content')

        <div class="row">
            <div class="col">
                <!-- Form basic -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h6 class="fw-bold">@yield('title')</h6>
                    </div>
                    <form action="{{ url('admin/home/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control form-control-sm">
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleFormControlTextarea1">Description</label>
                                <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label>Image</label>
                                <input name="image" type="file" class="form-control form-control-sm">
                            </div>
                            <div class="form-group mb-3">
                                <label>Instagram</label>
                                <input name="instagram" type="text" class="form-control form-control-sm" value="https://instagram.com/">
                            </div>
                            <div class="form-group mb-3">
                                <label>Linkedin</label>
                                <input name="linkedin" type="text" class="form-control form-control-sm" value="https://linkedin.com/">
                            </div>
                            <div class="form-group mb-3">
                                <label>Twitter</label>
                                <input name="twitter" type="text" class="form-control form-control-sm" value="https://twitter.com/">
                            </div>
                            <div class="form-group mb-3">
                                <label>Github</label>
                                <input name="github" type="text" class="form-control form-control-sm" value="https://github.com/">
                            </div>
                            <div class="form-group mb-3">
                                <label>Facebook</label>
                                <input name="facebook" type="text" class="form-control form-control-sm" value="https://facebook.com/">
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