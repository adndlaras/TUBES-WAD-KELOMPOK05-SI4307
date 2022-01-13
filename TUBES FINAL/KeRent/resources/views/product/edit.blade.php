@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card" style="width:35rem">
            <div class="card-header">
                Product
            </div>
            <div class="card-body">
                <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                <div class="form-group">
                    <label for="">Nama Kendaraan</label>
                    <input type="text" value="{{ $product->nama }}" name="nama" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" name="harga" id="" value="{{ $product->harga }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Foto</label>
                    <input type="file" name="foto" value="Helm" id="" class="form-control">
                </div>
            </div>
            <div class="card-footer d-flex">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
        </div>
    </div>
@endsection