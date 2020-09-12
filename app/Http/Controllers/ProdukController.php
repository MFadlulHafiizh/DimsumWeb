<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function calldata()
    {
        $konten = \App\Produk::get();
        return view('produk', compact('konten'));;
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $konten = \App\Produk::where('nama_produk', 'like', "%" . $search . "%")->get();

        return view('produk', compact('konten'));
    }

    public function getDetail(Request $request, $id){
        $data['produk'] = \DB::table('menu_item')->find($id);
        return view('detailProduk', $data);
    }
}