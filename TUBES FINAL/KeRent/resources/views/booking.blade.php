@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/heroes.css') }}">
@endpush
@section('content')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center justify-content-center g-lg-5 py-5">
      <div class="col text-center text-lg-start">
        <img src="{{ asset('img/beat.png') }}" alt="">
      </div>
      <div class="col">
        <div class="card">
            <div class="card-header d-flex justify-content-center align-items-center">
                Booking Order
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tanggal</th>
                            <th>Jenis</th>
                            <th>Waktu</th>
                            <th>Tambahan</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                30/12/2021
                            </td>
                            <td>
                                Honda Beat 125 CC
                            </td>
                            <td>
                                24 Jam
                            </td>
                            <td>
                                Helm
                            </td>
                            <td>
                                70000
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer d-flex justify-content-center align-items-center">
                <button class="btn btn-primary">Bayar</button>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection