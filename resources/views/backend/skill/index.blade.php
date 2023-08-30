@extends('backend.layouts.app')
@section('title', 'Skill')
@section('menu', 'Skill')

@section('content')
    <div class="main-content">
        <div class="card mb-4">
            <div class="card-header">
                @yield('menu')
                <a href="{{ route('skill.create') }}" id="createSkill" class="btn btn-primary btn-md shadow-sm text-secondary-100 fw-bold float-end"><i
                    class="bi bi-plus pe-2"></i>Tambah Data</a>
            </div>
            <div class="card-body">
                @include('message')
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped table-hover">
                        <thead class="text-uppercase text-center">
                            <tr class="tb-vh-25 xs-text-md">
                                <th scope="col">No</th>
                                <th scope="col">Skill</th>
                                <th scope="col">Progres</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            @foreach($data as $item) {{-- Mengganti $data dengan variabel yang berisi data yang akan ditampilkan --}}
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->progres }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td class="text-center">
                                        <a href="{{ url('admin/skill/edit', ['id' => $item->id]) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                                        <form action="{{ url('admin/skill/destroy', ['id' => $item->id]) }}" method="POST" style="display: inline-block;">
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
@endsection