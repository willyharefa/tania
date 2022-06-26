@extends('layout.sbadmin.master')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Table Grooming <br>
        <a href="/grooming/selesai/{{ $groomings[0]->id }}" class="btn btn-success">Selesai</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Nama User</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama User</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($groomings as $grooming)
                    <tr>
                        <td>{{ $grooming->user->name }}</td>
                        <td>{{ $grooming->tanggal }}</td>
                        <td>{{ $grooming->jam }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection