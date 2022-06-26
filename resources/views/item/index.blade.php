@extends('layout.sbadmin.master')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Table Item <br>
        <a href="/item/form" class="btn btn-success">Tambah</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama Barang</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->stock }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                            <img src="{{ asset('/storage/'. $item->foto) }}" width="100" height="100">
                        </td>
                        <td>
                            <a href="/item/edit/{{ $item->id }}" class="btn btn-warning">Edit</a>
                            <a href="/item/delete/{{ $item->id }}" class="btn btn-danger" onclick="return confirm('Hapus Data?')">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection