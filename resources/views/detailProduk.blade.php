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
				<div class="col-auto offset-10">
				<p class="ml-auto mr-4">
					<button class="btn btn-success " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
					  INFO PEMESANAN
					</button>
				  </p>
				  <div class="collapse" style="margin-left: -950px;" id="collapseExample">
					<div class="card card-body border-success mr-4">
						<div class="h5">Lokasi Kedai dan Kantor Produksi</div>
						Jl. Ciumbuleuit bawah  no.05 rt.06/10 kota bandung

						<div class="h5 mt-3">Contact person</div>
						Alin 
						081910383236 (call) <br>
						081224820002 (wa only) <br>
						<a href="https://api.whatsapp.com/send?phone=6289655031225" class="btn btn-success mt-2" style="width: 16%">CONTACT ME</a>
					</div>
				  </div>
        	   </div>
            </div>
        </div>
@endsection
@section('script')
@endsection
</body>