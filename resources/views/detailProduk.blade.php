@extends('layout.templateNav')

@section('title', 'Detail Produk')
@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/detailProduk.css')}}">
@endsection

@section('introduction', 'sliding-underline')
@section('produk', 'aktif')
@section('help', 'sliding-underline')
@section('about', 'sliding-underline')
@section('contact', 'sliding-underline')

<body>
	@section('container')

	@csrf
<!-- 		<div class="col-md-8">
            <h1 class="ml-3">{{ @$produk->nama_produk }}</h1>
            <span class="ml-3 mb-3 tanggal">{{ @$produk->harga }}</span>
            <img src="{{ asset('/ProdukItem/'.$produk->foto)}}" class="container mt-2" alt="...">
            <p class="ml-3 mt-2 isi-berita">{{ @$produk->deskripsi }}</p><br>
            <span  class="ml-3">{{ @$produk->jumlah_porsi }}</span>
        </div> -->

        <div class="container box mt-3">
        	<div class="row align-items-center">
        		<div class="col-md-6">
        			<img src="{{ asset('/ProdukItem/'.$produk->foto)}}" class="container" alt="{{ $produk->nama_produk }}">
        		</div>
        		<div class="col-md-6">
        			<h3 class="ml-3 mr-2 mt-3">Dimsum {{ @$produk->nama_produk }}</h3>
            		<span class="ml-3 mr-2 mb-3 harga">Rp.{{ @$produk->harga}}</span>
            		<p class="ml-3 mr-2 mb-5 mt-2">Isi per Kemasan : {{ @$produk->jumlah_porsi }}</p>
            		<p class="ml-3 mr-2">Deskripsi :</p>
            		<p class="ml-3 mr-2 mb-3">{{ @$produk->deskripsi }} {{ @$produk->deskripsi }}</p>
        		</div>
        	</div>
        	<div class="row pl-3">
	        	<div class="col-auto mb-3 offset-md-10">
	        		<a href="#" class="btn btn-success">INFO PEMESANAN</a>
	        	</div>
        	</div>
        </div>

@endsection
@section('script')
@endsection
</body>