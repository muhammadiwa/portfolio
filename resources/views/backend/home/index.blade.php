@extends('backend.layouts.app')

@section('menu', 'Home')
@section('title', 'Home')
@section('content')
    <div class="main-content">
        <div class="card mb-4">
            <div class="card-header">
                @yield('menu')
                <a href="{{ url('admin/home/create') }}" id="createHome" class="btn btn-primary btn-md shadow-sm text-secondary-100 fw-bold float-end"><i
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
                                <th scope="col">Email</th>
                                <th scope="col">No.Hp</th>
                                <th scope="col">Birthday</th>
                                <th scope="col">Address</th>
                                <th scope="col">Degree</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Instagram</th>
                                <th scope="col">Linkedin</th>
                                <th scope="col">Twitter</th>
                                <th scope="col">Github</th>
                                <th scope="col">Facebook</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach($data as $item) {{-- Mengganti $data dengan variabel yang berisi data yang akan ditampilkan --}}
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->tlp }}</td>
                                    <td>{{ $item->birthday }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->degre }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        @if($item->image)
                                            <img src="{{ asset('storage/uploads/home/' . $item->image) }}" alt="{{ $item->name }}" class="avatar rounded-3" width="100">
                                        @else
                                            <img src="{{ asset('assets/img/avatar.jpg') }}" alt="avatar rounded-3" width="100">
                                        @endif
                                    </td>
                                    <td>{{ $item->instagram }}</td>
                                    <td>{{ $item->linkedin }}</td>
                                    <td>{{ $item->twitter }}</td>
                                    <td>{{ $item->github }}</td>
                                    <td>{{ $item->facebook }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('admin/home/edit', ['id' => $item->id]) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ url('admin/home/destroy', ['id' => $item->id]) }}" method="POST" style="display: inline-block;">
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
                            <span class="md-text-rg text-secondary-500">Warning! Deleting this Data is
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

    <!-- Modal Create -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content custom p-2">
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel"><strong>Add New Data</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="createForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram">
                                </div>
                                <div class="mb-3">
                                    <label for="linkedin" class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control" id="linkedin" name="linkedin">
                                </div>
                                <div class="mb-3">
                                    <label for="twitter" class="form-label">Twitter</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter">
                                </div>
                                <div class="mb-3">
                                    <label for="github" class="form-label">Github</label>
                                    <input type="text" class="form-control" id="github" name="twitter">
                                </div>
                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="twitter">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-sm"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success btn-sm" id="createData">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content custom p-2">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel"><strong>Edit Data</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" id="editForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram">
                                </div>
                                <div class="mb-3">
                                    <label for="linkedin" class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control" id="linkedin" name="linkedin">
                                </div>
                                <div class="mb-3">
                                    <label for="twitter" class="form-label">Twitter</label>
                                    <input type="text" class="form-control" id="twitter" name="twitter">
                                </div>
                                <div class="mb-3">
                                    <label for="github" class="form-label">Github</label>
                                    <input type="text" class="form-control" id="github" name="twitter">
                                </div>
                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control" id="facebook" name="twitter">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-sm"
                        data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success btn-sm" id="updateData">Update</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.12.1/r-2.3.0/datatables.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript"
        src="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js">
    </script>
    <script>
        $(document).ready(function () {
            $('#dataTableExport').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'LEGAL'
                    }
                ]
            });
        });

    </script>
@endsection



