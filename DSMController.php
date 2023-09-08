<?php

namespace App\Http\Controllers;

use App\Models\Post_DSM;
use Illuminate\Http\Request;

class DSMController extends Controller
{
    public function daftar_surat_masuk()
    {
        $data = Post_DSM::all();
        return view('DaftarSuratMasuk.daftar_surat_masuk', compact('data'));
    }

    public function tambah_DSM()
    {
        return view('DaftarSuratMasuk.tambah_DSM', [
            'title' => 'Tambah'
        ]);
    }
    
    public function insertdata(Request $request){
        Post_DSM::create($request->all());
        return redirect()->route('daftar_surat_masuk');
    }
}
