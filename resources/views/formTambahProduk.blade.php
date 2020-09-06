<!DOCTYPE html>
<html>
<head>
	<script src="{{URL::asset('/assets/bootstrap/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{URL::asset('/assets/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('/assets/bootstrap/js/bootstrap.js')}}"></script>
    <link rel="stylesheet" href="{{ URL::asset('/assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/adminCreate.css')}}">
	<title>Tambah Produk</title>
</head>
<body>
	@if(session('error'))
		<div class="alert alert-error">
		  	{{session('error')}}
		</div>
	@endif

	@if (count($errors)>0)
		<div class="alert alert-danger">
			<strong><i class="fas fa-exclamation-triangle ml-3"></i> Perhatian</strong>
			<br>
			<ul>
				@foreach ($errors->all()  as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="{{ url('admin', @$produk->id) }}" method="post" enctype="multipart/form-data">
		@csrf

		@if(!empty($produk))
			@method('PATCH')
		@endif
		<div class="container contact">
			<div class="row">
				<div class="col-md-3">
					<div class="contact-info">
						<i class="fas fa-folder-plus fa-4x"></i>
						<h2>Tambah Produk</h2>
					</div>
				</div>
				<div class="col-md-9">
					<div class="contact-form">
						<div class="form-group">
						  <label class="control-label col-sm-5">Nama Produk</label>
						  <div class="col-sm-10">          
							<input type="text" maxlength="35" class="form-control" placeholder="Masukan nama produk" name="nama_produk"
							value="{{ old('nama_produk', @$produk->nama_produk) }}">
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-4">Harga</label>
						  <label class="control-label col-sm-2">Jumlah/porsi</label>
						  <label class="control-label col-sm-5">Harga Reseller</label>
						  <div class="row ml-auto">
						  <div class="col-sm-4">          
							<input type="text" class="form-control" placeholder="Rp. --.---" name="harga" 
							value="{{ old('harga', @$produk->harga) }}">
						  </div>
						  <div class="col-sm-2">
							<input type="text" class="form-control" placeholder=".../pcs" name="jumlah_porsi"
							value="{{ old('jumlah_porsi', @$produk->jumlah_porsi) }}">
						  </div>
						  <div class="col-sm-3">
							<input type="text" class="form-control" placeholder="Rp. --.---" name="harga_reseller"
							value="{{ old('harga_reseller', @$produk->harga_reseller) }}">
						  </div>
						</div>
						</div>

						<div class="form-group">
						  <label class="control-label col-sm-5">Deskripsi</label>
						  <div class="col-sm-10">
							<textarea class="form-control" rows="5" name="deskripsi">{{ old('deskripsi', @$produk->deskripsi) }}</textarea>
						  </div>
						</div>
						<div class="form-group">
						  <label class="control-label col-sm-5">Foto</label>
						  <div class="col-sm-10">
							<input type="file" name="foto">
						  </div>
						</div>
						<div cla
						<div class="form-group">        
						  <div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success">Tambah</button>
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</body>
</html>