@extends('layouts.main')

@section('container')
   <h1>List Perawat</h1>
   <div class="d-flex justify-content-end">
      <a class="btn btn-primary btn-sm" href="perawat/create">Tambah</a>
   </div>
   <br />

   @if (session()->has('success'))
      <div class="alert alert-success mb-4">
         {{ session()->get('success', '') }}
      </div>
   @endif
   <table class="table table-striped rounded shadow">
      <tr>
         <th>Nama Perawat</th>
         <th>Alamat</th>
         <th>Tanggal Lahir</th>
         <th>ID Perawat</th>
         <th>ID Poliklinik</th>

         <th class="text-center">Aksi</th>
      </tr>

      @foreach ($perawats as $perawat)
         <tr>
            <td>{{ $perawat->Nama }}</td>
            <td>{{ $perawat->Alamat }}</td>
            <td>{{ $perawat->Tgl_Lahir }}</td>
            <td>{{ $perawat->ID_Perawat }}</td>
            <td>{{ $perawat->ID_Poliklinik }}</td>


            <td class="text-center">
               <div class="btn-group">
                  <a class="btn btn-primary btn-sm" href="perawat/{{ $perawat->id }}">Detail</a>
                  <a class="btn btn-warning btn-sm" href="perawat/{{ $perawat->id }}/edit">Edit</a>
                  <form action="perawat/{{ $perawat->id }}" method="post">
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
