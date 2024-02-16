@extends('layouts.main')

@section('container')
   <h1>List Tindakan</h1>
   <div class="d-flex justify-content-end">
      <a class="btn btn-primary btn-sm" href="tindakan/create">Tambah</a>
   </div>
   <br />

   @if (session()->has('success'))
      <div class="alert alert-success mb-4">
         {{ session()->get('success', '') }}
      </div>
   @endif
   <table class="table table-striped rounded shadow">
      <tr>
         <th>No RM</th>
         <th>Nama Pasien</th>
         <th>Alamat</th>
         <th>Jenis Kelamin</th>
         <th>Tanggal Lahir</th>
         <th>Nama Perawat</th>
         <th>ID Poliklinik</th>
         <th>Diagnoasa</th>
         <th>No Ruangan</th>
         <th>Keterangan</th>

         <th class="text-center">Aksi</th>
      </tr>

      @foreach ($tindakans as $tindakan)
         <tr>
            <td>{{ $tindakan->pasien->No_RM }}</td>
            <td>{{ $tindakan->pasien->Nama }}</td>
            <td>{{ $tindakan->pasien->Alamat }}</td>
            <td>{{ $tindakan->pasien->Jenis_Kelamin }}</td>
            <td>{{ $tindakan->pasien->TTL }}</td>
            <td>{{ $tindakan->perawat->Nama }}</td>
            <td>{{ $tindakan->perawat->ID_Poliklinik }}</td>
            <td>{{ $tindakan->Diagnosa }}</td>
            <td>{{ $tindakan->No_Ruangan }}</td>
            <td>{{ $tindakan->Keterangan }}</td>


            <td class="text-center">
               <div class="btn-group">
                  <a class="btn btn-primary btn-sm" href="tindakan/{{ $tindakan->id }}">Detail</a>
                  <a class="btn btn-warning btn-sm" href="tindakan/{{ $tindakan->id }}/edit">Edit</a>
                  <form action="tindakan/{{ $tindakan->id }}" method="post">
                     @csrf
                     @method('delete')
                     <button class="btn btn-danger btn-sm">Hapus</button>
                  </form>
               </div>
            </td>
         </tr>
      @endforeach
   </table>
@endsection
