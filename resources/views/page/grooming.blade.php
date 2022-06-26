@extends('layout.petcare.master')
@section('content')
@if (session()->get('berhasil'))
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
                    <h2>Booking</h2>
                    <form action="/page/grooming" method="post">
                        @csrf
                        <input type="date" name="tanggal" class="form-control"><br>
                        <button type="submit" class="btn btn-primary">Cek Jadwal</button>
                    </form>
                </div> 
            </div>
        </div>
        @if (isset($groomings))
            <div class="row">
                <div class=" col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-animal-kingdom"></span>
                        </div>
                        <div class="services-cap">
                            <h3><a href="#">09:00</a></h3>
                            <form action="/grooming" method="post">
                                @csrf
                                <input type="hidden" name="jam" value="09:00:00">
                                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                                    @foreach ($groomings as $g)
                                    @if($g->jam == '09:00:00')
                                    <?php $sibuk9 = true ?>
                                        <button type="button" class="btn btn-danger">Sibuk</button>
                                    @endif
                                    @endforeach
                                    @if(!isset($sibuk9))
                                        <button type="submit" class="btn btn-success">Booking</button>
                                    @endif
                            </form>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-animal-kingdom"></span>
                        </div>
                        <div class="services-cap">
                            <h3><a href="#">14:00</a></h3>
                            <form action="/grooming" method="post">
                                @csrf
                                <input type="hidden" name="jam" value="14:00:00">
                                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                                    @foreach ($groomings as $g)
                                    @if($g->jam == '14:00:00')
                                    <?php $sibuk14 = true ?>
                                        <button type="button" class="btn btn-danger">Sibuk</button>
                                    @endif
                                    @endforeach
                                    @if(!isset($sibuk14))
                                        <button type="submit" class="btn btn-success">Booking</button>
                                    @endif
                            </form>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-animal-kingdom"></span>
                        </div>
                        <div class="services-cap">
                            <h3><a href="#">16:00</a></h3>
                            <form action="/grooming" method="post">
                                @csrf
                                <input type="hidden" name="jam" value="16:00:00">
                                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                                    @foreach ($groomings as $g)
                                    @if($g->jam == '16:00:00')
                                    <?php $sibuk16 = true ?>
                                        <button type="button" class="btn btn-danger">Sibuk</button>
                                    @endif
                                    @endforeach
                                    @if(!isset($sibuk16))
                                        <button type="submit" class="btn btn-success">Booking</button>
                                    @endif
                            </form>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3 col-md-6 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-animal-kingdom"></span>
                        </div>
                        <div class="services-cap">
                            <h3><a href="#">18:00</a></h3>
                            <form action="/grooming" method="post">
                                @csrf
                                <input type="hidden" name="jam" value="18:00:00">
                                <input type="hidden" name="tanggal" value="{{ $tanggal }}">
                                    @foreach ($groomings as $g)
                                    @if($g->jam == '18:00:00')
                                    <?php $sibuk18 = true ?>
                                        <button type="button" class="btn btn-danger">Sibuk</button>
                                    @endif
                                    @endforeach
                                    @if(!isset($sibuk18))
                                        <button type="submit" class="btn btn-success">Booking</button>
                                    @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection