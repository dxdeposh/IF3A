<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{

    public function index()
    {
        $data = Berita::all();
        return view('berita.index', ['data' => $data]);
    }
    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    { {
            $berita = Berita::create([
                'judul_berita' => $request->judul,
                'isi_berita' => $request->isi_berita
            ]);
            if ($berita) {
                return redirect()->route('berita.index')->with('success', 'Berita Berhasil Disimpan.');
            } else {
                return redirect()->route('berita.index')->with('error', 'Berita Gagal Disimpan.');
            }
        }
    }
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('berita.edit', ['data' => $berita]);
    }

    public function update($id, Request $request)
    { {
            $berita = Berita::where('id', $id)->update([
                'judul_berita' => $request->judul,
                'isi_berita' => $request->isi_berita
            ]);

            if ($berita) {
                return redirect()->route('berita.index')->with('success', 'Berita Berhasil Diubah.');
            } else {
                return redirect()->route('berita.index')->with('error', 'Berita Gagal Diubah.');
            }
        }
    }

    public function show($id){
        $berita = Berita::find($id);
        return view('berita.show', ['data' => $berita]);
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);

        if ($berita) {
            $berita->delete();
            return redirect()->route('berita.index')->with('success', 'Berita Berhasil Dihapus.');
        } else {
            return redirect()->route('berita.index')->with('error', 'Berita Tidak Ditemukan.');
        }
    }
}
