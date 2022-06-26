@extends('layout.sbadmin.master')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Table Grooming <br>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Nama User</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama User</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($groomings as $grooming)
                    <tr>
                        <td>{{ $grooming->user->name }}</td>
                        <td>
                            <a href="/grooming/lihat/{{ $grooming->user_id }}" class="btn btn-info">Lihat</a>
                            {{-- <a href="/grooming/selesai/{{ $grooming->id }}" class="btn btn-success">Selesai</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection