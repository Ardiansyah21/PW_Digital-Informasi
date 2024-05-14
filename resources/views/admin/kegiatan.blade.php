@extends('layouts.app')

@section('title', 'Daftar Kegiatan')

@section('contents')
<div class="info">
    @if (Session::get('sucessAdd'))
    <div class="alert alert-success   w-32 h-10">
        {{ Session::get('sucessAdd') }}
        @endif
    </div>
    @if (Session::get('successDelete'))
    <div class="alert alert-danger w-32 h-10">
        {{ Session::get('successDelete') }}
    </div>
    @endif
    @if (Session::get('successUpdate'))
    <div class="alert alert-success w-32 h-10">
        {{ Session::get('successUpdate') }}
    </div>
    @endif
    @if (Session::get('successUpdateStok'))
    <div class="alert alert-success w-32 h-10">
        {{ Session::get('successUpdateStok') }}
    </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar informasi</h6>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tambah
                    Daftar Kegiatan</button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Form data prestasi
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('store.kegiatan') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label for="" class="form-label">Nama
                                        Kegiatan</label>
                                    <input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan"
                                        placeholder="Nama Kegiatan">
                                </div>
                                <div class="mb-3">
                                    <label for="date" class="form-label">Date:</label>
                                    <input type="date" class="form-control" name="date" id="date"
                                        placeholder="Select date">
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label">Dokumentasi
                                    </label>
                                    <input type="file" class="form-control" name="foto" id="foto" placeholder="foto">
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger"
                                        data-bs-dismiss="modal">kembali</button>
                                    <button type="submit" value="kirim data siswa" class="btn btn-success">Simpan
                                        data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Akhir modal -->
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no=1; @endphp
                        @foreach ($kegiatan as $item)
                        <th>{{ $no++ }}</td>
                        <td>{{ $item['nama_kegiatan'] }}</td>
                        <td>{{ $item['date'] }}</td>
                        <td class=""> <a href="../assets/image/{{$item->foto}}" target="_blank">
                                <img src="{{asset('assets/izmage/' . $item->foto)}}"
                                    style="width: 100px; height: auto;">
                        </td>
                        <td>
                            <a href="/edittt/{{$item->id}}" class="btn btn-warning">Edit</a>
                            <form action="/hapuss/{{$item->id}}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button class=" btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @endsection