<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Baju;
use App\Models\Celana;
use App\Models\Sepatu;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getBaju(){ 
        $baju = Baju::get(); 
        $respon = [ 
            'status' => 
            'success', 
            'msg' => 
            'Berhasil Mengambil data Baju', 
            'data' => $baju,
        ]; 

        return response()->json($respon); 
    }

    public function getCelana(){ 
        $celana = Celana::get(); 
        $respon = [ 
            'status' => 
            'success', 
            'msg' => 
            'Berhasil Mengambil data Celana', 
            'data' => $celana,
        ]; 
        
        return response()->json($respon); 
    }

    public function getSepatu(){ 
        $sepatu = Sepatu::get(); 
        $respon = [ 
            'status' => 
            'success', 
            'msg' => 
            'Berhasil Mengambil data Sepatu', 
            'data' => $sepatu,
        ]; 
        
        return response()->json($respon); 
    }    

}
