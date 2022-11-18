@extends('admin.layouts.global')
@section('title')
Home
@endsection

@section('content')
    <div class="container px-4 py-5">
        <h2 class="pb-2 fs-4">Baju, Celana, & Sepatu Anda</h2>
        @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            @foreach ($bajus as $baju)
                <div class="card" style="width: 18rem; margin:10px; background-color: #C7F2A4;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $baju->nama}}</h5>
                        <p class="card-text">Baju</p>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item" style="background-color: #FCFFB2">Ukuran : {{$baju->ukuran}}</li>
                        <li class="list-group-item" style="background-color: #FCFFB2">Warna  : {{$baju->warna}}</li>
                        <li class="list-group-item" style="background-color: #FCFFB2">Jumlah : {{$baju->jumlah}}</li>
                        <li class="list-group-item" style="background-color: #FCFFB2">Model  : {{$baju->ModelBaju->model}}</li>
                    </ul>
                </div>
            @endforeach
            @foreach ($celanas as $celana)
                <div class="card" style="width: 18rem; margin:10px; background-color: #C7F2A4;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $celana->nama}}</h5>
                        <p class="card-text">Celana</p>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item" style="background-color: #FCFFB2">Ukuran : {{$celana->ukuran}}</li>
                        <li class="list-group-item" style="background-color: #FCFFB2">Warna  : {{$celana->warna}}</li>
                        <li class="list-group-item" style="background-color: #FCFFB2">Jumlah : {{$celana->jumlah}}</li>
                        <li class="list-group-item" style="background-color: #FCFFB2">Model  : {{$celana->ModelCelana->model}}</li>
                    </ul>
                </div>
            @endforeach
            @foreach ($sepatus as $sepatu)
                <div class="card" style="width: 18rem; margin:10px; background-color: #C7F2A4;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $sepatu->nama}}</h5>
                        <p class="card-text">Sepatu</p>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item" style="background-color: #FCFFB2">Ukuran : {{$sepatu->ukuran}}</li>
                        <li class="list-group-item" style="background-color: #FCFFB2">Warna  : {{$sepatu->warna}}</li>
                        <li class="list-group-item" style="background-color: #FCFFB2">Jumlah : {{$sepatu->jumlah}}</li>
                        <li class="list-group-item" style="background-color: #FCFFB2">Model  : {{$sepatu->ModelSepatu->model}}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
@endsection
