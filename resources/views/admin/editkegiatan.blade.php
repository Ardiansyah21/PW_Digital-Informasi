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
        <form action="/ubahhh/{{$kegiatan->id}}" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Edit Daftar Kegiatan</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama_barang">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan"
                                    value="{{$kegiatan->nama_kegiatan}}">
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Date</label>
                                <input type="date" class="form-control" id="date" name="date"
                                    value="{{$kegiatan->date}}">
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <td> <img src="{{asset('assets/image/' . $kegiatan->foto)}}" width="80"> </td>
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