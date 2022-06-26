@extends('layout.sbadmin.master')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Table Pesanan <br>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($pesanans as $pesan)
                    <tr>
                        <td>{{ $pesan->user->name }}</td>
                        <td>
                            <a href="/pesanan/lihat/{{ $pesan->user_id }}" class="btn btn-info">Lihat</a>
                            {{-- <a href="/pesanan/selesai/{{ $pesan->id }}" class="btn btn-success" onclick="return confirm('Selesai?')">Selesai</a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection