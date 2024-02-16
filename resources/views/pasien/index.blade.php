@extends('layouts.main')

@section('container')
   <h1>List Pasien</h1>
   <div class="d-flex justify-content-end">
      <a class="btn btn-primary btn-sm" href="pasien/create">Tambah</a>
   </div>
   <br />

   @if (session()->has('success'))
      <div class="alert alert-success mb-4">
         {{ session()->get('success', '') }}
      </div>
   @endif
   <table class="table table-striped rounded shadow">
      <tr>
         <th>Nama Pasien</th>
         <th>Alamat</th>
         <th>Tempat Tanggal Lahir</th>
         <th>Jenis Kelamin</th>
         <th>Pekerjaan</th>
         <th>No Rekam Medis</th>
         <th class="text-center">Aksi</th>
      </tr>

      @foreach ($pasiens as $pasien)
         <tr>
            <td>{{ $pasien->Nama }}</td>
            <td>{{ $pasien->Alamat }}</td>
            <td>{{ $pasien->TTL }}</td>
            <td>{{ $pasien->Jenis_Kelamin }}</td>
            <td>{{ $pasien->Pekerjaan }}</td>
            <td>{{ $pasien->No_RM }}</td>

            <td class="text-center">
               <div class="btn-group">
                  <a class="btn btn-primary btn-sm" href="pasien/{{ $pasien->id }}">Detail</a>
                  <a class="btn btn-warning btn-sm" href="pasien/{{ $pasien->id }}/edit">Edit</a>
                  <form action="pasien/{{ $pasien->id }}" method="post">
                     @csrf
                     @method('delete')
                     <button class="btn btn-danger btn-sm">Hapus</button>
                  </form>
               </div>
            </td>
         </tr>
      @endforeach
   </table>

   {{ $pasiens->links() }}
@endsection
