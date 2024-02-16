@extends('layouts.main')

@section('container')
   <h1 class="mt-3">Detail Perawat</h1>
   <div class="row justify-content-center">
      <div class="col-sm-8">
         <div class="card">
            <div class="card-body">
               <h5 class="card-title fw-bold">Nama Perawat</h5>
               <h5 class="card-title mb-3">{{ $perawat->Nama }}</h5>
               <h5 class="card-title fw-bold">Alamat</h5>
               <h5 class="card-title mb-3">{{ $perawat->Alamat }}</h5>
               <h5 class="card-title fw-bold">Tanggal Lahir</h5>
               <h5 class="card-title mb-3">{{ $perawat->Tgl_Lahir }}</h5>
               <h5 class="card-title fw-bold">ID Perawat</h5>
               <h5 class="card-title mb-3">{{ $perawat->ID_Perawat }}</h5>
               <h5 class="card-title fw-bold">ID Poliklinik</h5>
               <h5 class="card-title mb-3">{{ $perawat->ID_Poliklinik }}</h5>
               <a href='/perawat' class="btn btn-warning">Back</a>
            </div>
         </div>
      </div>
   </div>
@endsection
