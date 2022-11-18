<?php

namespace App\Http\Controllers;

use App\Models\Baju;
use App\Models\ModelBaju;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Nette\Utils\Image;

class BajuController extends Controller
{
    public function index(){
        return view('supplier.home', [
            'bajus' => Baju::where('user_id', Auth::user()->id)->get()
        ]);
    }

    public function create(){
        return view('supplier.crud.create_baju',[
            "model_bajus" => ModelBaju::all(),
            "suppliers" => User::all(),
            'title' => 'Baju'
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string|max:30',
            'foto' => 'required|image||mimes:jpeg,png,jpg|max:2048',
            'ukuran' => 'required|string|max:20',
            'warna' => 'required|string|max:50',
            'jumlah' => 'required',
            'status' => 'required',
            'model_baju_id' => 'required',
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

        Baju::create($validateData);

        // Redirect
        return redirect()->route('baju.index')->with('succes', 'Baju berhasil ditambahkan');
    }

    public function show(Baju $id){
        return view('supplier.crud.show_baju', [
            'title' => 'Baju',
            'bajus' => $id,
        ]);
    }

    public function edit(Baju $id){
        return view('supplier.crud.update_baju', [
            'model_bajus' => ModelBaju::all(),
            'title' => 'Baju',
            'baju' => $id
        ]);
    }

    public function update(Request $request, $id){
        $baju = Baju::findOrFail($id);
        $request->validate([
            'nama' => 'required|string|max:30',
            'foto' => 'nullable|image|mimes:jpeg,jpg,png',
            'ukuran' => 'required|string|max:20',
            'warna' => 'required|string|max:50',
            'jumlah' => 'required',
            'model_baju_id' => 'required',
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

        $baju->update($validateData);

        return redirect()->route('baju.index')->with('succes', 'Baju berhasil Diubah');
    }

    public function destroy($id)
    {
        DB::table('bajus')->where('id',$id)->delete();

		return redirect()->route('baju.index')->with('succes', 'Baju Berhasil dihapus');
    }

    //admin
    public function editBajuAdmin(Baju $id){
        return view('admin.show_baju', [
            'title' => 'Baju',
            'baju' => $id
        ]);
    }

    public function updateBajuAdmin(Request $request, $id){
        $baju = Baju::findOrFail($id);
        $request->validate([
            'status' => 'string|max:20',
        ]);

        $validateData = $request->all();

        $baju->update($validateData);

        return redirect()->route('admin.home')->with('succes', 'Status berhasil Diubah');
    }
}

