<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dataAdmin(){
        $data['produk'] = \App\Produk::get();
        return view('adminControl', $data);
    }

    public function create(){
    	return view('formTambahProduk');
    }

    public function store(Request $request){

    	$rule = [
    		'nama_produk' => 'required|max:35',
    		'harga' => 'required|numeric',
    		'jumlah_porsi' => 'required|numeric',
    		'deskripsi' =>'required',
    		'harga_reseller' => 'required|numeric'
    	];
    	$this->validate($request, $rule);

    	$input = $request->all();

        $status = \App\Produk::create($input);

        if ($request->hasFile('foto')) {
            $file =  $request->file('foto');
            $extension = $file->getClientOriginalName();
            $filename = time() . '_' . $extension;
            $file->move(\base_path() ."/public/produkItem", $filename);
            $status->foto =  $filename;
            $status->save();
        }

    	if ($status) {
    		return redirect('/admin')->with('success', 'Data berhasil ditambahkan');
    	}
    	else{
    		return redirect('/admin/create')->with('error', 'Data gagal ditambahkan');
    	}
    }

    public function edit(Request $request, $id){
		$data['produk'] = \DB::table('menu_item')->find($id);
		return view('formTambahProduk', $data);
	}

	public function update(Request $request, $id){
		$rule = [
    		'nama_produk' => 'required|max:35',
    		'harga' => 'required|numeric',
    		'jumlah_porsi' => 'required|numeric',
    		'deskripsi' =>'required',
    		'harga_reseller' => 'required|numeric'
    	];
    	$this->validate($request, $rule);

    	$input = $request->all();
        
        $produk = \App\Produk::find($id);
        $status = $produk->update($input);

        if ($request->hasFile('foto')) {
            $file =  $request->file('foto');
            $extension = $file->getClientOriginalName();
            $filename = time() . '_' . $extension;
            $file->move(\base_path() ."/public/produkItem", $filename);
            $produk->foto =  $filename;
            $produk->update();
        }

        if ($status) {
            return redirect('/admin')->with('success', 'Data berhasil diubah');
        }   
  		else {
            return redirect('/admin/create')->with('error', 'Data gagal diubah');
        }
	}

    public function destroy(Request $request, $id) {

        $status = \DB::table('menu_item')->where('id', $id)->delete();

        if ($status) {
            return redirect('/admin')->with('success', 'Data berhasil dihapus');
        }
		else {
            return redirect('/siswa/create')->with('error', 'Data gagal dihapus');
        }
    }
}
