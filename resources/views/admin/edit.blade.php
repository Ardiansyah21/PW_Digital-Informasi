@extends('layouts.app')

@section('title', 'Form edit Produk')

@section('contents')
<div class="info">
    @if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        {{ $error }}<br>
        @endforeach
    </div>
    @endif
    <div>
        <form action="/ubah/{{$informasis->id}}" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Daftar Informasi</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_barang">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="{{$informasis->judul}}">
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{$informasis->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan"
                                    value="{{$informasis->jurusan}}">
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Rayon</label>
                                <input type="text" class="form-control" id="rayon" name="rayon"
                                    value="{{$informasis->rayon}}">
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                    value="{{$informasis->deskripsi}}">
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <td> <img src="{{asset('assets/image/' . $informasis->foto)}}" width="80"> </td>
                                <input type="file" class="form-control" id="foto" name="foto" value="">
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/informasi" class="btn btn-danger">Kembali</a>
                            <button type=" submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @endsection