@extends('layouts.main')

@section('container')
   <h1 class="mt-3">Detail Pasien</h1>
   <div class="row justify-content-center">
      <div class="col-sm-8">
         <div class="card">
            <div class="card-body">
               <h5 class="card-title fw-bold">Nama Pasien</h5>
               <h5 class="card-title mb-3">{{ $pasien->Nama }}</h5>
               <h5 class="card-title fw-bold">Alamat</h5>
               <h5 class="card-title mb-3">{{ $pasien->Alamat }}</h5>
               <h5 class="card-title fw-bold">Tempat Tanggal Lahir</h5>
               <h5 class="card-title mb-3">{{ $pasien->TTL }}</h5>
               <h5 class="card-title fw-bold">Jenis Kelamin</h5>
               <h5 class="card-title mb-3">{{ $pasien->Jenis_Kelamin }}</h5>
               <h5 class="card-title fw-bold">Pekerjaan</h5>
               <h5 class="card-title mb-3">{{ $pasien->Pekerjaan }}</h5>
               <a href='/pasien' class="btn btn-warning">Back</a>
            </div>
         </div>
      </div>
   </div>
@endsection
