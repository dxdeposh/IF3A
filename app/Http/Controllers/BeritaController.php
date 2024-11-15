<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function create(){
        return view('berita.create');
    }

    public function store(Request $request){ {
        $berita = Berita::create([
           'judul_berita' => $request->judul,
           'isi_berita' => $request->isi_berita
        ]);
        if($berita){
            return "Data Berhasil Disimpan <a href='".route('berita.create')."'>Kembali</a>";
        }else{
            return "Data Gagal Disimpan <a href='".route('berita.create')."'>Kembali</a>";
            }
        }
    }
}
