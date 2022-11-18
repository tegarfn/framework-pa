<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use App\Models\Celana;use App\Models\ModelBaju;
use App\Models\Sepatu;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index_admin', [
            'bajus' => Baju::all(),
            'celanas' => Celana::all(),
            'sepatus' => Sepatu::all()
        ]);
    }

    public function showbaju(Baju $id){
        return view('admin.show_baju', [
            'title' => 'Baju',
            'bajus' => $id,
        ]);
    }

    public function showcelana(Celana $id){
        return view('admin.show_celana', [
            'title' => 'Celana',
            'celanas' => $id,
        ]);
    }

    public function showsepatu(Sepatu $id){
        return view('admin.show_sepatu', [
            'title' => 'Sepatu',
            'sepatus' => $id,
        ]);
    }

    public function edit(Baju $id){
        return view('supplier.crud.update_baju', [
            'model_bajus' => ModelBaju::all(),
            'title' => 'Baju',
            'baju' => $id
        ]);
    }
}