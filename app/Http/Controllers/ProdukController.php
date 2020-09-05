<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function calldata(){
    	$data['produk'] = \DB::table('menu_item')->get();
    	return view('produk', $data);
    }

}
