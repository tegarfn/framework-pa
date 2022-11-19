@extends('admin.layouts.global')

@section('title')
MyFOOD - Detail Data
@endsection
@section('content')
<div class="container">
    <h1 class="text-center mb-5">Detail Celana</h1>
    <div class="d-grid gap-2 col-2 mx-auto">
    </div>
    <div class="card" style="background-color: #C7F2A4;">
    <table class="table table-borderless">
        <tr>
            <td><h4>Nama</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{ $celanas->nama }}</h4></td>
        </tr>
        <tr>
            <td><h4>Ukuran</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$celanas->ukuran}}</h4></td>
        </tr>
        <tr>
            <td><h4>Jumlah</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$celanas->jumlah}}</h4></td>
        </tr>
        <tr>
            <td><h4>Warna</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$celanas->warna}}</h4></td>
        </tr>
        <tr>
            <td><h4>Model</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$celanas->ModelCelana->model}}</h4></td>
        </tr>
        <tr>
            <td><h4>Supplier</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$celanas->User->name}}</h4></td>
        </tr>
        <tr>
            <td><h4>Status</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$celanas->status}}</h4></td>
        </tr>
        <tr>
            <td><h4>Foto</h4></td>
            <td>
                <img src="/images/{{ $celanas->foto }}" width="100px">
            </td>
        </tr>
        <tr>
            <td>
                <form action="{{route('admin.celana.update', $celanas->id)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select id="status" name="status" style="background-color: #FCFFB2" class="form-select @error('status')
                            is-invalid
                            @enderror">
                            <option value="" selected>Pilih</option>
                            <option value="Terima">Terima</option>
                            <option value="Tolak">Tolak</option>
                        </select>
                        @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-outline-success me-2">Simpan</button>
                    </div>
                </form>
                {{-- <input type="button" name="" id="" class="btn btn-success mb-3" value="Terima">
                <input type="button" name="" id="" class="btn btn-danger mb-3" value="Tolak"> --}}
            </td>
        </tr>
    </table>
    </div>
</div>
@endsection
