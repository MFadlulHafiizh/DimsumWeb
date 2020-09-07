<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function calldata()
    {
        // $data['produk'] = \DB::table('menu_item')->get();
        // return view('produk', $data);

        $konten = \App\Produk::paginate(9);
        return view('produk', compact('konten'));;
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $konten = \App\Produk::where('nama_produk', 'like', "%" . $search . "%")->paginate(9);

        return view('produk', compact('konten'));
    }

    public function getDetail(Request $request, $id){
        $data['produk'] = \DB::table('menu_item')->find($id);
        return view('detailProduk', $data);
    }
}