@extends('layout.sbadmin.master')
@section('content')
@php
    $total = 0;
@endphp
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Table Pesanan <br>
        <a href="/pesanan/selesai/{{ $pesanans[0]->id }}" class="btn btn-success" onclick="return confirm('Selesai?')">Selesai</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Nama Barang</th>
                    <th>Qty</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pesanans as $pesan)
                @php
                    $total += $pesan->sub_price;    
                @endphp
                    <tr>
                        <td>{{ $pesan->user->name }}</td>
                        <td>{{ $pesan->item->nama }}</td>
                        <td>{{ $pesan->qty }}</td>
                        <td>{{ $pesan->sub_price }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="3">Total Harga</td>
                    <td>{{ $total }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection