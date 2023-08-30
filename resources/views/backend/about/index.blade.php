@extends('backend.layouts.app')

@section('menu', 'About')
@section('title', 'About')
@section('content')
    <div class="main-content">
        <div class="card mb-4">
            <div class="card-header">
                @yield('menu')
                <a href="{{ url('admin/about/create') }}" id="createAbout" class="btn btn-primary btn-md shadow-sm text-secondary-100 fw-bold float-end"><i
                    class="bi bi-plus pe-2"></i>Tambah Data</a>
            </div>
            <div class="card-body">
                @include('message')
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped table-hover">
                        <thead class="text-uppercase text-center">
                            <tr class="tb-vh-25 xs-text-md">
                                <th scope="col">No</th>
                                <th scope="col">Jabatan</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Description 2</th>
                                <th scope="col">Description 3</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach($data as $item) {{-- Mengganti $data dengan variabel yang berisi data yang akan ditampilkan --}}
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>
                                        @if($item->image)
                                            <img src="{{ asset('storage/uploads/about/' . $item->image) }}" alt="{{ $item->name }}" class="avatar rounded-3" width="100">
                                        @else
                                            <img src="{{ asset('assets/img/avatar.jpg') }}" alt="avatar rounded-3" width="100">
                                        @endif
                                    </td>
                                    <td>{{ $item->description }}</td>
                                    <td>{{ $item->description2 }}</td>
                                    <td>{{ $item->description3 }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('admin/about/edit', ['id' => $item->id]) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ url('admin/about/destroy', ['id' => $item->id]) }}" method="POST" style="display: inline-block;">
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

    <!-- Modal area here -->

    <!-- Modal confirmation delete -->
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content custom p-2">
                <div class="modal-body">
                    <div class="d-flex">
                        <div class="float-start">
                            <i class="bi bi-exclamation-circle text-danger pe-4"></i>
                        </div>
                        <div class="float-end">
                            <h5 class="fw-bold text-secondary-700">Are you sure?</h5>
                            <span class="md-text-rg text-secondary-500">Warning! Deleting this User is
                                permanent,This operation can not
                                be
                                reversed.</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-light btn-sm text-secondary-500"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </div>
        </div>
    </div>

@endsection



