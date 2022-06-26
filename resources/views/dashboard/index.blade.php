@extends('layout.sbadmin.master')
@section('content')
@php
    $total = 0;
@endphp
@if (auth()->user()->role == 1)
<div class="row">
    <div class="col-xl-6 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">Jumlah Pesanan Belum Selesai</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/pesanan">{{ $pesanCount }}</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Jumlah Grooming Belum Selesai</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/grooming">{{ $groomingCount }}</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
@elseif(auth()->user()->id == 2)
<div class="row">
    <div class="col-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Table Pesanan
            </div>
            <div class="card-body">
                <table class="table table-secondary">
                    <thead>
                        <tr>
                            <th>Nama Item</th>
                            <th>jumlah</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesans as $pesan)
                         @php
                            $total += $pesan->sub_price 
                         @endphp
                        
                            <tr>
                                <td>{{ $pesan->item->nama }}</td>
                                <td>{{ $pesan->qty }}</td>
                                <td>{{ $pesan->sub_price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Total Harga</th>
                            <th>{{ $total }}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Table Grooming
            </div>
            <div class="card-body">
                <table class="table table-secondary">
                    <thead>
                        <tr>
                            <th>Nama User</th>
                            <th>Tangal</th>
                            <th>jam</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama User</th>
                            <th>Tangal</th>
                            <th>jam</th>
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
    </div>
</div>
@endif

@endsection