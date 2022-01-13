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
                Riwayat Transaksi
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Tanggal</th>
                            <th>Jenis</th>
                            <th>Waktu</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transactions as $item)
                            <tr>
                                <td>
                                    {{$item->tanggal}}
                                </td>
                                <td>
                                    {{$item->product->nama}}
                                </td>
                                <td>
                                    {{$item->waktu}} Hari
                                </td>
                                <td>
                                    {{$item->total}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th>Belum Ada Data...</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection