@extends('layouts.main')

@section('container')
   <form method="post" action="/pasien">
      @csrf

      <div>
         <label></label>
         <div>
            <h3>Tambah/Ubah Pasien</h3>
         </div>
      </div>
      <div class="row mb-3">
         <label class="form-label">Nama Pasien</label>
         <div class="col-sm-6">
            <input class="form-control" type="text" name="Nama" value="{{ old('Nama') }}" id="Nama" required />
         </div>
      </div>
      <div class="row mb-3">
         <label class="form-label">Alamat Pasien</label>
         <div class="col-sm-6">
            <input class="form-control" type="text" name="Alamat" value="{{ old('Alamat') }}" id="Alamat"
               required />
         </div>
      </div>
      <div class="row mb-3">
         <label class="form-label">Jenis Kelamin</label>
         <div class="col-sm-6">
            <input class="form-control" type="text" name="Jenis_Kelamin" value="{{ old('Jenis_Kelamin') }}"
               id="Alamat" required />
         </div>
      </div>
      <div class="row mb-3">
         <label class="form-label">Pekerjaan</label>
         <div class="col-sm-6">
            <input class="form-control" type="text" name="Pekerjaan" value="{{ old('Pekerjaan') }}" id="Alamat"
               required />
         </div>
      </div>
      <div class="row mb-3">
         <label class="form-label">No Rekam Medis</label>
         <div class="col-sm-6">
            <input class="form-control" type="number" name="No_RM" value="{{ old('No_RM') }}" id="No_RM"
               required />
         </div>
      </div>

      <div class="row mb-3">
         <label class="form-label">Tempat Tanggal Lahir</label>
         <div class="col-sm-6">
            <input class="form-control" type="text" name="TTL" value="{{ old('TTL') }}" id="nama"
               required />
         </div>
      </div>

      <div class="mb-5 ">
         <a href="/pasien" class="btn btn-warning">Cencel</a>
         <input type="submit" value="simpan" class="btn btn-primary" />
      </div>

   </form>
@endsection
