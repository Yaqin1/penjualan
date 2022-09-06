@extends('layout.app')

@section('title')
    Kategori
@endsection

@section('content')
<div class="card mt-5">
    <div class="card-header">
        <div class="card-title">

    <h5>Data Kategori</h5>

        <button type="button" class="btn btn-success btn-sm float-end" data-bs-toggle='modal' data-bs-target='#modalTambah'><i class="fa fa-plus">
        </i></button>
        </div>
    </div>


<div class="card-body">
<table class="table table-striped">
  <thead>
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
</div>
</div>
  </thead>
  <tbody>
    @foreach ($kategori as $item)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$item->nama}}</td>
        <td>
            <a href="/kategori/edit/{{$item->id}}" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i>
            </a>
        <a href="/kategori/hapus/{{$item->id}}" class = "btn btn-sm btn-danger"> <i class="fa fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('kategori.store')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control @error ('nama') is-invalid @enderror">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
        </div>
  </div>
</div>
@endsection