<?php

namespace App\Http\Controllers;

use App\Models\ModelSepatu;
use App\Models\Sepatu;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Image;

class SepatuController extends Controller
{
    public function index(){
        return view('supplier.home', [
            'sepatus' => Sepatu::all()
        ]);
    }

    public function create(){
        return view('supplier.crud.create_sepatu',[
            "model_sepatus" => ModelSepatu::all(),
            "suppliers" => User::all(),
            'title' => 'Sepatu'
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string|max:30',
            'foto' => 'required|image|mimes:jpeg,jpg,png',
            'ukuran' => 'required|string|max:20',
            'warna' => 'required|string|max:50',
            'jumlah' => 'required',
            'status' => 'required',
            'model_sepatu_id' => 'required',
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

        Sepatu::create($validateData);

        // Redirect
        return redirect()->route('sepatu.index')->with('succes', 'Sepatu berhasil ditambahkan');
    }

    public function show(Sepatu $id){
        return view('supplier.crud.show_sepatu', [
            'title' => 'Sepatu',
            'sepatus' => $id,
        ]);
    }

    public function edit(Sepatu $id){
        return view('supplier.crud.update_Sepatu', [
            'model_sepatus' => ModelSepatu::all(),
            'title' => 'Sepatu',
            'sepatu' => $id
        ]);
    }

    public function update(Request $request, $id){
        $sepatu = Sepatu::findOrFail($id);
        $request->validate([
            'nama' => 'required|string|max:30',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png,gif',
            'ukuran' => 'required|string|max:20',
            'warna' => 'required|string|max:50',
            'jumlah' => 'required',
            'model_sepatu_id' => 'required',
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

        $sepatu->update($validateData);

        return redirect()->route('sepatu.index')->with('succes', 'Sepatu berhasil Diubah');
    }

    public function destroy($id)
    {
        DB::table('sepatus')->where('id',$id)->delete();

		return redirect()->route('sepatu.index')->with('succes', 'Sepatu Berhasil dihapus');
    }

    //admin
    public function editSepatuAdmin(Sepatu $id){
        return view('admin.show_Sepatu', [
            'title' => 'Sepatu',
            'sepatu' => $id
        ]);
    }

    public function updateSepatuAdmin(Request $request, $id){
        $sepatu = Sepatu::findOrFail($id);
        $request->validate([
            'status' => 'string|max:20',
        ]);

        $validateData = $request->all();

        $sepatu->update($validateData);

        return redirect()->route('admin.home')->with('succes', 'Status berhasil Diubah');
    }
}
