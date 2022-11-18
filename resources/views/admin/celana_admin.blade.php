@extends('admin.layouts.global')
@section('title')
Ini Halaman Home
@endsection

@section('content')
<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">Daftar Celana</h2>
    @if (session('success'))
        <div class="alert alert-success">
            <b>Yeah!</b> {{ session('success') }}
        </div>
    @endif
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
                <th scope="col">Supllier</th>
                <th scope="col">Action</th>
            </tr> </thead>
            <tbody>
                @foreach ($celanas as $cl)
                <tr>
                <th scope="row">{{ $cl->id }}</th>
                <td>{{ $cl->nama }}</td>
                <td>{{ $cl->foto }}</td>
                <td>{{ $cl->ukuran }}</td>
                <td>{{ $cl->warna }}</td>
                <td>{{ $cl->jumlah }}</td>
                <td>{{ $cl->ModelCelana->model}}</td>
                <td>{{ $cl->User->name}}</td>
                <td>
                    <a href= {{ route('admin.show_celana', $cl->id) }} class=""><Button class="btn btn-success mb-3">Detail</Button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
