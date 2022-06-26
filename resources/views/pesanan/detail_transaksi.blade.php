@extends('layout.sbadmin.master')
@section('content')
@php
    $total = 0;
@endphp
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Table Pesanan <br>
        <form method="get">
            <input type="hidden" name="action" value="print">
            <button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Print</button>
        </form>
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
                @foreach ($transaksi as $t)
                @php
                    $total += $t->sub_price;    
                @endphp
                <tr>
                    <td>{{ $t->user->name }}</td>
                    <td>{{ $t->item->nama }}</td>
                    <td>{{ $t->qty }}</td>
                    <td>{{ $t->sub_price }}</td>
                </tr>
                @endforeach
            </tbody>
            <tr>
                <td colspan="3">Total Harga</td>
                <td>{{ $total }}</td>
            </tr>
        </table>
    </div>
</div>
@if (isset($_GET['action']))
    <script>
        window.print();
    </script>
@endif
@endsection