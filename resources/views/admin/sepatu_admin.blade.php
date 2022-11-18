@extends('admin.layouts.global')
@section('title')
Ini Halaman Home
@endsection

@section('content')
<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">Daftar sp</h2>
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
                @foreach ($sepatus as $sp)
                <tr>
                <th scope="row">{{ $sp->id }}</th>
                <td>{{ $sp->nama }}</td>
                <td>{{ $sp->foto }}</td>
                <td>{{ $sp->ukuran }}</td>
                <td>{{ $sp->warna }}</td>
                <td>{{ $sp->jumlah }}</td>
                <td>{{ $sp->ModelSepatu->model}}</td>
                <td>{{ $sp->User->name}}</td>
                <td>
                    <a href= {{ route('admin.show_sepatu', $sp->id) }} class=""><Button class="btn btn-success mb-3">Detail</Button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
