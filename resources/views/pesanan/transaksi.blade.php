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
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $t)
                    <tr>
                        <td>{{ $t->user->name }}</td>
                        <td>{{ $t->total_price }}</td>
                        <td>
                            <a href="/pesan/laporan/{{ $t->id }}" class="btn btn-info"><i class="fa fa-info-circle"></i> Detail</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection