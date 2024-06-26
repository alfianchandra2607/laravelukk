@extends('layouts.adm-main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Merk</label>
                                <input type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" value="{{ old('merk') }}" placeholder="Masukkan Merk Barang">
                                @error('merk')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Seri</label>
                                <input type="text" class="form-control @error('seri') is-invalid @enderror" name="seri" value="{{ old('seri') }}" placeholder="Masukkan Seri Barang">
                                @error('seri')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Spesifikasi</label>
                                <textarea class="form-control @error('spesifikasi') is-invalid @enderror" name="spesifikasi" placeholder="Masukkan Spesifikasi Barang">{{ old('spesifikasi') }}</textarea>
                                @error('spesifikasi')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Kategori</label>
                                <select class="form-select @error('kategori_id') is-invalid @enderror" name="kategori_id" aria-label="Default select example">
                                    <option value="" selected disabled>Pilih Kategori</option>
                                    @foreach($kategori as $kategori)
                                        <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                            <a href="{{ route('barang.index') }}" class="btn btn-md btn-warning">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
