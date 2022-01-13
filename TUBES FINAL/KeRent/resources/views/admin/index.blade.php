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
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Hapus
</button>
                <a href="" class="btn btn-primary">Edit</a>
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
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Hapus
</button>
                <a href="" class="btn btn-primary">Edit</a>
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
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Hapus
</button>
                <a href="" class="btn btn-primary">Edit</a>
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
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Hapus
</button>
                <a href="" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Apakah anda yakin ingin menghapusnya??
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Ya</button>
        </div>
      </div>
    </div>
  </div>
@endsection