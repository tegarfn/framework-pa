@extends('supplier.layouts.global')

@section('title')
Detail
@endsection
@section('content')
<div class="container">
    <h1 class="text-center mb-5">Detail Sepatu</h1>
    <div class="d-grid gap-2 col-2 mx-auto">
    </div>
    <div class="card" style="background-color: #C7F2A4;">
    <table class="table table-borderless">
        <tr>
            <td><h4>Nama</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{ $sepatus->nama }}</h4></td>
        </tr>
        <tr>
            <td><h4>Ukuran</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$sepatus->ukuran}}</h4></td>
        </tr>
        <tr>
            <td><h4>Jumlah</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$sepatus->jumlah}}</h4></td>
        </tr>
        <tr>
            <td><h4>Warna</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$sepatus->warna}}</h4></td>
        </tr>
        <tr>
            <td><h4>Model</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$sepatus->ModelSepatu->model}}</h4></td>
        </tr>
        <tr>
            <td><h4>Supplier</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$sepatus->User->name}}</h4></td>
        </tr>
        <tr>
            <td><h4>Status</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$sepatus->status}}</h4></td>
        </tr>
        <tr>
            <td><h4>Foto</h4></td>
            <td>
                <img src="/images/{{ $sepatus->foto }}" width="100px">
            </td>
        </tr>
        <tr>
            <td>
                @if ( $sepatus->status == "Menunggu Konfirmasi" )
                <p>Anda dapat melakukan perubahan atau menghapus data dalam waktu 1 minggu</p>
                <a href= {{ route('sepatu.edit', $sepatus->id) }} class=""><Button class="btn btn-success mb-3">Edit</Button></a>
                <a href= {{ route('sepatu.delete', $sepatus->id) }} class=""><Button class="btn btn-danger mb-3">Hapus</Button></a>
                @endif
            </td>
        </tr>
    </table>
    </div>
</div>
@endsection
