@extends('layout.petcare.master')
@section('content')
@if ($errors->any())
  <script>
    alert('Pemesanan Gagal');
  </script>
@elseif (session()->get('berhasil'))
  <script>
    alert('Pemesanan Berhasil');
  </script>
@endif
<div class="our-services section-padding30">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="cl-xl-7 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-70">
                    <span>barang yang dipesan dapat diambil ditoko</span>
                    <h2>Pesan Barang</h2>
                </div> 
            </div>
        </div>
        <div class="row">
            @foreach ($items as $item)
                <div class=" col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <img src="/storage/{{ $item->foto }}" width="100" height="100">
                        </div>
                        <div class="services-cap">
                            <h5 class="mt-3">{{ $item->nama }}</h5>
                            <p>Stok: {{ $item->stock }}</p>
                            <p>Rp. {{ $item->price }}</p>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" onclick="getId({{ $item->id }})">Pesan</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Jumlah Pesan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/pesan" method="post" id="qty">
            @csrf
              <input type="hidden" name="item_id" id="item_id">
              <input type="text" name="qty" class="form-control">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" form="qty">Pesan</button>
        </div>
      </div>
    </div>
  </div>
{{-- end modal --}}
<script>
    function getId(itemId) {
        item_id.value = itemId;
    }
</script>
@endsection