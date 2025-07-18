@extends('app')
@section('content')
    <div class="card">
  <div class="card-header">
    Data Buku Tamu     <a href= "", class="btn btn-success">Tambah Data</a>
  </div>
  <div class="card-body">
        <table class="table" id= "myTable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Telepon</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
        @foreach($data as $key=> $item);
    <tr>
      <th scope="row">{{ $key+ 1}}</th>
      <td>{{ $item->nama}}</td>
      <td>{{ $item->tlp}}</td>
      <td>{{ $item->email}}</td>
      <td>{{ $item->alamat}}</td>
      <td>
        <a href= "", class="btn btn-warning">Edit</a>
        <a href= "", class="btn btn-danger">Hapus</a>
      </td>
      
    </tr>
        @endforeach
  </tbody>
</table>


  </div>
</div>

@endsection

@section('script')

    <script>
       $(document).ready( function() {
          $('myTable').DataTable();
       })
    </script>

@endsection

