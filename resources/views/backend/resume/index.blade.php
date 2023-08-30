@extends('backend.layouts.app')
@section('menu', 'Resume')

@section('title', 'Resume')

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="main-content">
            <div class="card mb-4">
                <div class="card-header">
                    Education
                    <a href="{{ route('education.create') }}" id="createEducation" class="btn btn-primary btn-md shadow-sm text-secondary-100 fw-bold float-end"><i
                        class="bi bi-plus pe-2"></i>Tambah Data</a>
                </div>
                <div class="card-body">
                    @include('message')
                    <div class="table-responsive">
                        <table id="data-table" class="table table-bordered table-striped table-hover">
                            <thead class="text-uppercase text-center">
                                <tr class="tb-vh-25 xs-text-md">
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Start</th>
                                    <th scope="col">End</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                @foreach($education as $ed) {{-- Mengganti $education dengan variabel yang berisi education yang akan ditampilkan --}}
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ed->name }}</td>
                                        <td>{{ $ed->title }}</td>
                                        <td>{{ $ed->start }}</td>
                                        <td>{{ $ed->end }}</td>
                                        <td>{{ $ed->description }}</td>
                                        <td class="text-center">
                                            <a href="{{ url('admin/education/edit', ['id' => $ed->id]) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                            <form action="{{ url('admin/education/destroy', ['id' => $ed->id]) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash3-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="main-content">
            <div class="card mb-4">
                <div class="card-header">
                    Experience
                    <a href="{{ route('experience.create') }}" id="createExperience" class="btn btn-primary btn-md shadow-sm text-secondary-100 fw-bold float-end"><i
                        class="bi bi-plus pe-2"></i>Tambah Data</a>
                </div>
                <div class="card-body">
                    @include('message')
                    <div class="table-responsive">
                        <table id="data-table" class="table table-bordered table-striped table-hover">
                            <thead class="text-uppercase text-center">
                                <tr class="tb-vh-25 xs-text-md">
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Start</th>
                                    <th scope="col">End</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="align-middle">
                                @foreach($experience as $ex) {{-- Mengganti $experience dengan variabel yang berisi experience yang akan ditampilkan --}}
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ex->name }}</td>
                                        <td>{{ $ex->title }}</td>
                                        <td>{{ $ex->start }}</td>
                                        <td>{{ $ex->end }}</td>
                                        <td>{{ $ex->description }}</td>
                                        <td class="text-center">
                                            <a href="{{ url('admin/experience/edit', ['id' => $ex->id]) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                            <form action="{{ url('admin/experience/destroy', ['id' => $ex->id]) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="bi bi-trash3-fill"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection