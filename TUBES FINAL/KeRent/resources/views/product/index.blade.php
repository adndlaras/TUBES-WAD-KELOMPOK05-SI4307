@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/heroes.css') }}">
@endpush
@section('content')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <a href="{{ route('product.create') }}" class="btn btn-primary">Buat Produk</a>
    <div class="d-flex">
        @forelse($products as $item)
        <div class="card ms-2">
            <div class="card-header d-flex justify-content-between align-items-center">
                <img src="{{ Storage::url($item->foto) }}" alt="">
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <span>
                        <h6>{{ $item->nama }}</h6>
                    </span>
                </div>
                <p class="text-secondary mt-2">Rp.{{ $item->harga }} / Hari</p>
                <hr>
            </div>
            <div class="card-footer">
                @if (Auth::user()->role == 'admin')
                <a href="{{ route('product.edit', $item->id) }}" class="btn btn-primary w-100">Edit</a>
                <form action="{{ route('product.destroy', $item->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger w-100">Hapus</button>
                </form>
                @else
                <a href="/transaction/create?id={{ $item->id }}" class="btn btn-primary w-100">Booking</a>
                @endif
                
            </div>
        </div>
        @empty
            <div class="card">
                <div class="card-header">
                    Belum Ada...
                </div>
            </div>
        @endforelse
    </div>
  </div>
@endsection