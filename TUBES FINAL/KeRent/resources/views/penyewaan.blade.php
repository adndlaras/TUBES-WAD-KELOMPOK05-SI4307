@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/heroes.css') }}">
@endpush
@section('content')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="d-flex">
        <div class="card ms-2">
            <div class="card-header d-flex justify-content-between align-items-center">
                <img src="{{ asset('img/beat.png') }}" alt="">
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <span>
                        <h6>Honda Beat 125 CC</h6>
                    </span>
                    <span class="ms-4">
                        <h6>100Km</h6>
                    </span>
                </div>
                <p class="text-secondary mt-2">Rp.60000 / Hari</p>
                <hr>
                <p class="text-secondary">NO HELMET</p>
            </div>
            <div class="card-footer">
                <a href="" class="btn btn-primary w-100">Booking</a>
            </div>
        </div>
        <div class="card ms-2">
            <div class="card-header d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/aerox.png') }}" alt="">
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <span>
                        <h6>Yamaha Aerox 155 CC</h6>
                    </span>
                    <span class="ms-4">
                        <h6>550m</h6>
                    </span>
                </div>
                <p class="text-secondary mt-2">Rp.90000 / Hari</p>
                <hr>
                <p class="text-secondary">NO HELMET</p>
            </div>
            <div class="card-footer">
                <a href="" class="btn btn-primary w-100">Booking</a>
            </div>
        </div>
        <div class="card ms-2">
            <div class="card-header d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/vario.png') }}" alt="">
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <span>
                        <h6>Honda Vario 150 CC</h6>
                    </span>
                    <span class="ms-4">
                        <h6>1km</h6>
                    </span>
                </div>
                <p class="text-secondary mt-2">Rp.70000 / Hari</p>
                <hr>
                <p class="text-secondary">NO HELMET</p>
            </div>
            <div class="card-footer">
                <a href="" class="btn btn-primary w-100">Booking</a>
            </div>
        </div>
        <div class="card ms-2">
            <div class="card-header d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/scoopy.png') }}" alt="">
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <span>
                        <h6>Honda Scoopy 115 CC</h6>
                    </span>
                    <span class="ms-4">
                        <h6>450m</h6>
                    </span>
                </div>
                <p class="text-secondary mt-2">Rp.63000 / Hari</p>
                <hr>
                <p class="text-secondary">NO HELMET</p>
            </div>
            <div class="card-footer">
                <a href="" class="btn btn-primary w-100">Booking</a>
            </div>
        </div>
    </div>
  </div>
@endsection