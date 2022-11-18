@extends('supplier.layouts.global')

@section('title')
MyFOOD - Tambah Data
@endsection
@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-5">Tambah sepatu</h1>
    <div class="d-grid gap-2 col-2 mx-auto">
    </div>
    <div class="card" style="background-color: #C7F2A4;">
        <div class="card-body">
            @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $item)
                 <li>{{  $item  }}</li>
                @endforeach
            </ul>
            @endif

            <form action="{{route('sepatu.update', $sepatu->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama sepatu</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" style="background-color: #FCFFB2" id="nama" name="nama" value="{{$sepatu->nama}}" required>
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Foto Produk</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" style="background-color: #FCFFB2" id="foto" name="foto" required>
                    <img src="/images/{{ $sepatu->foto }}" width="100px">
                    @error('foto')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Ukuran</label>
                    <input type="text" class="form-control @error('ukuran')is-invalid @enderror" style="background-color: #FCFFB2" id="ukuran" name="ukuran" value="{{$sepatu->ukuran}}" required>
                    @error('ukuran')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Warna</label>
                    <input type="text" class="form-control @error('warna')is-invalid @enderror" style="background-color: #FCFFB2" id="warna" name="warna" value="{{$sepatu->warna}}" required>
                    @error('warna')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Jumlah</label>
                    <input type="number" class="form-control @error('jumlah')is-invalid @enderror" style="background-color: #FCFFB2" id="jumlah" name="jumlah" value="{{$sepatu->jumlah}}" required>
                    @error('jumlah')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Model Sepatu</label>
                    <select id="model_sepatu_id" name="model_sepatu_id" style="background-color: #FCFFB2" class="form-select @error('model_sepatu_id')
                        is-invalid
                        @enderror">
                        <option value="" selected>Pilih</option>
                        @foreach ($model_sepatus as $model_sepatu)
                            <option value={{$model_sepatu->id}}>{{$model_sepatu->model}}</option>
                        @endforeach
                    </select>
                    @error('model_sepatu_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control @error('supplier_id')is-invalid @enderror" id="user_id" name="user_id" value={{ Auth::user()->id}} required>
                    @error('supplier_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-outline-success me-2">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
