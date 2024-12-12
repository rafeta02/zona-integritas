<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Tim;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index()
    {
        $dataTerakhir = Berita::latest()->take(3)->get();

        $datatable1 = $dataTerakhir->slice(0, 1)->first();
        $datatable2 = $dataTerakhir->slice(1, 1)->first();
        $datatable3 = $dataTerakhir->slice(2, 1)->first();

        

        return view('zona',compact('datatable1', 'datatable2', 'datatable3'));
    }

    public function show(Request $request,$slug)

    {
        //$data = Berita::find($slug);
        $data = Berita::where('slug', $slug)->first();
        if (!$data) {
            // Jika tidak ditemukan, kembalikan halaman 404
            abort(404);
        }
        return view('/berita/detail', ['data' => $data]);
    }

}
