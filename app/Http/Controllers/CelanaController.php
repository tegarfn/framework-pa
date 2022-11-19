<?php

namespace App\Http\Controllers;

use App\Models\Celana;
use App\Models\ModelCelana;
use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Image;

class CelanaController extends Controller
{
    public function index(){
        $endpoint = env('BASE_ENV') . '/api/baju';

        $client = new Client();
        $response = $client->request('GET', $endpoint);
        $data = json_decode($response->getBody(), true);

        return view('supplier.home', [
            'celanas' => $data['data']
        ]);
    }

    public function create(){
        return view('supplier.crud.create_celana',[
            "model_celanas" => ModelCelana::all(),
            "suppliers" => User::all(),
            'title' => 'Celana'
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string|max:30',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png',
            'ukuran' => 'required|string|max:20',
            'warna' => 'required|string|max:50',
            'jumlah' => 'required',
            'status' => 'required',
            'model_celana_id' => 'required',
            'user_id' => 'required'
        ]);

        $validateData = $request->all();

        if (!empty($request->hasFile('foto'))) {
            $image = $request->file('foto');
            $destinationPath = public_path('images/');
            $produkImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $produkImage);
            $validateData['foto'] = $produkImage;
        }

        Celana::create($validateData);

        // Redirect
        return redirect()->route('celana.index')->with('succes', 'Celana berhasil ditambahkan');
    }

    public function show(Celana $id){
        return view('supplier.crud.show_celana', [
            'title' => 'Celana',
            'celanas' => $id,
        ]);
    }

    public function edit(Celana $id){
        return view('supplier.crud.update_celana', [
            'model_celanas' => ModelCelana::all(),
            'title' => 'Celana',
            'celana' => $id
        ]);
    }

    public function update(Request $request, $id){
        $celana = Celana::findOrFail($id);
        $request->validate([
            'nama' => 'required|string|max:30',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            'ukuran' => 'required|string|max:20',
            'warna' => 'required|string|max:50',
            'jumlah' => 'required',
            'status' => 'string|max:20',
            'model_celana_id' => 'required',
            'user_id' => 'required'
        ]);

        $validateData = $request->all();

        if (!empty($request->hasFile('foto'))) {
            $image = $request->file('foto');
            $destinationPath = public_path('images/');
            $produkImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $produkImage);
            $validateData['foto'] = $produkImage;
        }

        $celana->update($validateData);

        return redirect()->route('celana.index')->with('succes', 'Celana berhasil Diubah');
    }

    public function destroy($id)
    {
        DB::table('celanas')->where('id',$id)->delete();

		return redirect()->route('celana.index')->with('succes', 'Celana Berhasil dihapus');
    }

    //admin
    public function editCelanaAdmin(Celana $id){
        return view('admin.show_Celana', [
            'title' => 'Celana',
            'celanas' => $id
        ]);
    }

    public function updateCelanaAdmin(Request $request, $id){
        $celana = Celana::findOrFail($id);
        $request->validate([
            'status' => 'string|max:20',
        ]);

        $validateData = $request->all();

        $celana->update($validateData);

        return redirect()->route('admin.home')->with('succes', 'Status berhasil Diubah');
    }
}
