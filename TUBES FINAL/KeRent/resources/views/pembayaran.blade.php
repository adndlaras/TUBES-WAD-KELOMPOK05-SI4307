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
                <form action="">
                    <div class="form-group">
                        <label for="">Tanggal</label>
                        <input type="date" name="" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis</label>
                        <input type="text" name="" value="Honda Beat 125 CC" readonly id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Waktu</label>
                        <input type="text" name="" value="1 Day" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tambahan</label>
                        <select name="" id="" class="form-control">
                            <option value="">Pilih Item Tambahan</option>
                            <option value="">Helm</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection