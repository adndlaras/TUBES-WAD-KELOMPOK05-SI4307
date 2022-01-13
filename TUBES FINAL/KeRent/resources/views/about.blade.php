@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/heroes.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <style>
        #map {
    height: 100%;
    width: 100vw;
}
    </style>
@endpush
@section('content')
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <img src="{{ asset('img/hero.png') }}" width="400" alt="">
      </div>
      <div class="col-md-10 mx-auto col-lg-5 d-flex flex-column">
        <span>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
when an unknown printer took a galley of type and scrambled it to make a 
type specimen book. It has survived not only five centuries, 
but also the leap into electronic typesetting, remaining essentially unchanged
        </span>
        <span class="mt-3">
            <h1>
                Maps
            </h1>
        </span>
        <div>
            <div id="googleMap" style="width:100%;height:380px;"></div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
<script src="http://maps.googleapis.com/maps/api/js"></script>

    <script>
        // fungsi initialize untuk mempersiapkan peta
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-8.5830695,116.3202515),
            zoom:9,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        
        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
        }

        // event jendela di-load  
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endpush