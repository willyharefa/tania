@extends('layout.sbadmin.master')
@section('content')
<form action="/item" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <input type="hidden" name="id" value="{{ $item->id }}">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" value="{{ $item->nama }}">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
      <label for="stock" class="form-label">Stok</label>
      <input type="number" class="form-control" id="stock" name="stock" value="{{ $item->stock }}">
    </div>
    @error('stock')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
      <label for="price" class="form-label">Harga</label>
      <input type="number" class="form-control" id="price" name="price" value="{{ $item->price  }}">
    </div>
    @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="mb-3">
      <label for="foto" class="form-label">Foto</label>
      <input type="file" class="form-control" id="foto" name="foto" value="{{ $item->foto  }}">
    </div>
    @error('foto')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection