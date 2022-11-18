@extends('supplier.layouts.global')
@section('title')
Supplier - Baju
@endsection

@section('content')
<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">Daftar Baju</h2>
    @if (session('success'))
        <div class="alert alert-success">
            <b>Yeah!</b> {{ session('success') }}
        </div>
    @endif

<a href="{{ route('baju.create')}}" class=""><Button class="btn btn-primary mb-3">Tambah</Button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Foto</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Warna</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Model</th>
                <th scope="col">Action</th>
            </tr> </thead>
            <tbody>
                @foreach ($bajus as $baju)
                <tr>
                <th scope="row">{{ $baju->id }}</th>
                <td>{{ $baju->nama }}</td>
                <td>{{ $baju->foto }}</td>
                <td>{{ $baju->ukuran }}</td>
                <td>{{ $baju->warna }}</td>
                <td>{{ $baju->jumlah }}</td>
                <td>{{ $baju->ModelBaju->model}}</td>
                <td>
                    <a href= {{ route('baju.show', $baju->id) }} class=""><Button class="btn btn-success mb-3">Detail</Button></a>
                </td>
                {{-- Cukup Panggil seperti di atas --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
