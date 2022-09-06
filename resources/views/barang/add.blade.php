@extends('layout.app')

@section ('title')
    Barang
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah Barang</h5>
        </div>
    </div>
        
            <div class="card-body">
                <form action="{{route('barang.store')}}" method="POST">
                    @csrf
                    
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nama" >Nama Barang</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nama" >Harga</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>  

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="stock" class="form-label">Stock</label>
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="suplier" class="form-label">Suplier</label>
                                    <select name="suplier_id" id="suplier_id" class="form-control">
                                        <option value="">pilih....</option>
                                        @foreach ($suplier as $s)
                                            <option value="{{$s->id}}">{{$s->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="suplier" class="form-label">Kategori</label>
                                    <select name="kategori_id" id="kategori_id" class="form-control">
                                        <option selected>pilih...</option>
                                        @foreach ($kategori as $item)
                                            <option value="{{$item->id}}">{{$item->nama}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="modal-footer mt-4">
                                <button class="btn btn-success" type="submit"> <i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endsection
                



                                
                            
            
            
                

