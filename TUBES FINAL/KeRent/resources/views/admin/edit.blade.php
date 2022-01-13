@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card" style="width:35rem">
            <div class="card-header">
                Edit
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Nama Kendaraan</label>
                    <input type="text" name="" value="Honda Beat 125 CC" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Harga</label>
                    <input type="text" name="" value="640000" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Item Tambahan</label>
                    <input type="text" name="" value="Helm" id="" class="form-control">
                </div>
            </div>
            <div class="card-footer d-flex">
                <a href="" class="btn btn-danger w-100">Batal</a>
                <a href="" class="btn btn-primary ms-2 w-100">Simpan Perubahan</a>
            </div>
        </div>
    </div>
@endsection