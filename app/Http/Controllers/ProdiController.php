<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Support\ValidatedData;

class ProdiController extends Controller
{
    public function index()
    {
        $data = ['nama' => "salsacantik", 'foto' => 'E020322112.jpg'];
        $prodi = Prodi::all();
        return view('prodi.index', compact ('data', 'prodi')); 
    }

    public function create()
    {
        $data = ['nama' => "salsacantik", 'foto' => 'E020322112.jpg'];
        return view('prodi.create', compact(['data']));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate(
            [
                'nama_prodi' => 'required|unique:prodi|max:255'
            ],
            [
                'nama_prodi.required' => 'Nama Prodi diisi dulu ya cantik',
                'nama_prodi.unique' => 'Nama tidak bowleh sama yaa cantik',
                'nama_prodi.max' => 'Nama Prodi Maksimal 255 Huruf saja yaa'
            ]
        );
            Prodi::create($validateData);
            return redirect ('/prodi');
    }

    public function edit(string $id)
    {
        $data = ['nama' => "salsacantik", 'foto' => 'E020322112.jpg'];
        $prodi = Prodi::find($id); 
        return view('prodi.edit', compact(['data','prodi']));
    }

    public function update(Request $request, string $id)
    {
        $validateData = $request->validate(
            [
                'nama_prodi' => 'required|unique:prodi|max:255'
            ],
            [
                'nama_prodi.required' => 'Nama Prodi diisi dulu ya cantik',
                'nama_prodi.unique' => 'Nama tidak bowleh sama yaa cantik',
                'nama_prodi.max' => 'Nama Prodi Maksimal 255 Huruf saja yaa'
            ]
         );
        Prodi::where('id', $id)->update($validateData);
        return redirect('/prodi');
    }
    public function destroy(string $id)
    {
        Prodi ::destroy($id);
        return redirect('/prodi');
    }
}


