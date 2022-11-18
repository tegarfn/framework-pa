@extends('supplier.layouts.global')

@section('title')
MyFOOD - Detail Data
@endsection
@section('content')
<div class="container">
    <h1 class="text-center mb-5">Detail Baju</h1>
    <div class="d-grid gap-2 col-2 mx-auto">
    </div>
    <div class="card" style="background-color: #C7F2A4;">
    <table class="table table-borderless">
        <tr>
            <td><h4>Nama</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{ $bajus->nama }}</h4></td>
        </tr>
        <tr>
            <td><h4>Ukuran</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$bajus->ukuran}}</h4></td>
        </tr>
        <tr>
            <td><h4>Jumlah</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$bajus->jumlah}}</h4></td>
        </tr>
        <tr>
            <td><h4>Warna</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$bajus->warna}}</h4></td>
        </tr>
        <tr>
            <td><h4>Model</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$bajus->ModelBaju->model}}</h4></td>
        </tr>
        <tr>
            <td><h4>Supplier</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$bajus->User->name}}</h4></td>
        </tr>
        <tr>
            <td><h4>Status</h4></td>
            <td><h4>:</h4></td>
            <td><h4>{{$bajus->status}}</h4></td>
        </tr>
        <tr>
            <td><h4>Foto</h4></td>
            <td>
                <img src="/images/{{ $bajus->foto }}" width="100px">
            </td>
        </tr>
        <tr>
            <td>
                @if ( $bajus->status == "Menunggu Konfirmasi" )
                <p>Anda dapat melakukan perubahan atau menghapus data dalam waktu 1 minggu</p>
                <a href= {{ route('baju.edit', $bajus->id) }} class=""><Button class="btn btn-success mb-3">Edit</Button></a>
                <a href= {{ route('baju.delete', $bajus->id) }} class=""><Button class="btn btn-danger mb-3">Hapus</Button></a>
                @endif
            </td>
        </tr>

    </table>
    </div>
</div>
@endsection
