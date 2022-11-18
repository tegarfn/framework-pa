@extends('supplier.layouts.global')

@section('title')
Detail
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
                @if ( $celanas->status == "Menunggu Konfirmasi" )
                <p>Anda dapat melakukan perubahan atau menghapus data dalam waktu 1 minggu</p>
                <a href= {{ route('celana.edit', $celanas->id) }} class=""><Button class="btn btn-success mb-3">Edit</Button></a>
                <a href= {{ route('celana.delete', $celanas->id) }} class=""><Button class="btn btn-danger mb-3">Hapus</Button></a>
                @endif
            </td>
        </tr>
    </table>
    </div>
</div>
@endsection
