@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/heroes.css') }}">
@endpush
@section('content')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <img src="{{ asset('img/hero.png') }}" width="400" alt="">
      </div>
      <div class="col-md-10 mx-auto col-lg-5 d-flex justify-content-between">
        <div class="card">
            <div class="card-header">
                Ajukan Penyewaan
            </div>
            <div class="card-body">
                KeRent menyediakan fitur<br>
                penyewaan kendaraan bagi<br>
                kalian para mahasiswa/i <br>
                maupun umum yang<br>
                berdomisili di Bandung.<br>
                Silahkan klik tombol dibawah untuk <br>
                melakukan penyewaan kendaraan.
            </div>
            <div class="card-footer">
                <a href="" class="btn btn-primary w-100">Start</a>
            </div>
        </div>
        <div class="card ms-2">
            <div class="card-header">
                Fitur Chat
            </div>
            <div class="card-body">
                Bagi kalian yang masih bingung <br>
                dan ingin bertanya mengenai <br>
                penyewaan di kami, feel free untuk<br>
                menggunakan fitur chat agar <br>
                terhubung dengan admin!
            </div>
            <div class="card-footer">
                <a href="" class="btn btn-primary w-100">Start</a>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection