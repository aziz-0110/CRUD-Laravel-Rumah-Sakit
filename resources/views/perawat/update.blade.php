@extends('layouts.main')

@section('container')
   <form method="post" action="/perawat/{{ $perawat->id }}">
      @csrf
      @method('put')

      <div>
         <label></label>
         <div>
            <h3>Tambah Perawat</h3>
         </div>
      </div>
      <div class="row mb-3">
         <label class="form-label">Nama Perawat</label>
         <div class="col-sm-6">
            <input class="form-control" type="text" name="Nama" value="{{ old('Nama', $perawat->Nama) }}" id="Nama"
               required />
         </div>
      </div>
      <div class="row mb-3">
         <label class="form-label">Alamat Perawat</label>
         <div class="col-sm-6">
            <input class="form-control" type="text" name="Alamat" value="{{ old('Alamat', $perawat->Alamat) }}"
               id="Alamat" required />
         </div>
      </div>
      <div class="row mb-3">
         <label class="form-label">Tanggal Lahir</label>
         <div class="col-sm-6">
            <input class="form-control" type="date" name="Tgl_Lahir" value="{{ old('Tgl_Lahir', $perawat->Tgl_Lahir) }}"
               id="Alamat" required />
         </div>
      </div>
      <div class="row mb-3">
         <label class="form-label">ID Perawat</label>
         <div class="col-sm-6">
            <input class="form-control" type="number" name="ID_Perawat"
               value="{{ old('ID_Perawat', $perawat->ID_Perawat) }}" id="Alamat" required />
         </div>
      </div>
      <div class="row mb-3">
         <label class="form-label">ID Poliklinik</label>
         <div class="col-sm-6">
            <input class="form-control" type="number" name="ID_Poliklinik"
               value="{{ old('ID_Poliklinik', $perawat->ID_Poliklinik) }}" id="No_RM" required />
         </div>
      </div>

      <div class="my-5 ">
         <a href="/perawat" class="btn btn-warning">Cencel</a>
         <input type="submit" value="simpan" class="btn btn-primary" />
      </div>

   </form>
@endsection
