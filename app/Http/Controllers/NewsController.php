<?php

namespace App\Http\Controllers;

use App\Models\berita;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Validasi input jika diperlukan
        $validated = $request->validate([
            'query' => 'required|string|max:255',
        ]);

        // Melakukan pencarian
            $news = berita::where('judul', 'like', "%{$validated['query']}%")
                    ->orWhere('news', 'like', "%{$validated['query']}%")
                    ->paginate(10); // Pagination

                    if (!$news) {
                        // Jika tidak ditemukan, kembalikan halaman 404
                        abort(404);
                    }
                    
        return view('/berita/search', compact('news'));
    }  
}