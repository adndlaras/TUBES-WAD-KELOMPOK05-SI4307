@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/form-validation.css') }}">
@endpush

@section('content')
<div class="container">
    <main>
  
      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Detail Pembayaran</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0">{{ $product->nama }}</h6>
                <small class="text-muted">Brief description</small>
              </div>
              <span class="text-muted">Rp.{{ $product->harga }}</span>
            </li>
          </ul>
  
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" action="{{ route('transaction.store') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <div class="row g-3">
  
  
            <hr class="my-4">
  
            <h4 class="mb-3">Payment</h4>
  
            <div class="my-3">
              <div class="form-check">
                <input id="credit" name="payment" value="internet banking" type="radio" class="form-check-input" checked required>
                <label class="form-check-label" for="credit">Mobile/Internet Banking</label>
              </div>
              <div class="form-check">
                <input id="debit" name="payment" type="radio" value="dana" class="form-check-input" required>
                <label class="form-check-label" for="debit">Dana</label>
              </div>
              <div class="form-check">
                <input id="paypal" name="payment" type="radio" value="gopay" class="form-check-input" required>
                <label class="form-check-label" for="paypal">Gopay</label>
              </div>
              <div class="form-group">
                  <label for="">Tanggal</label>
                  <input type="date" name="tanggal" id="" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Waktu</label>
                <input type="number" name="waktu" id="" class="form-control">
            </div>
            </div>
  
  
            <hr class="my-4">
  
            <button class="w-100 btn btn-primary btn-lg" type="submit">Checkout</button>
          </form>
        </div>
      </div>
    </main>
  
  </div>
@endsection