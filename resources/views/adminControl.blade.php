@extends('layouts.app')

@section('content')
	@if(session('success'))
	<div class="alert alert-success">
		{{ session('success') }}
	</div>
	@endif

	@if(session('error'))
	<div class="alert alert-error">
		{{ session('error') }}
	</div>
	@endif
	<a href="{{ url('/admin/create') }}" class="btn btn-success w-100">Tambah Data Barang</a>
	<table class="table">
	  <thead class="thead-dark">
	    <tr class="ratatengah">
	      <th scope="col">No</th>
	      <th scope="col" style="width: 15%">Foto</th>
	      <th scope="col" style="width: 15%">Nama Produk</th>
	      <th scope="col" style="width: 10%">Harga</th>
	      <th scope="col" style="width: 5%">jumlah/porsi</th>
	      <th scope="col" style="width: 35%">deskripsi</th>
	      <th scope="col" style="width: 10%">Harga Reseller</th>
	      <th scope="col" colspan="2" style="width: 10%">Action</th>
	      <!-- 85 -->
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($produk as $row)
	    <tr>
	      <th scope="row" class="ratatengah">{{ $loop->iteration }}</th>
	      <td class="ratatengah"><img src="{{asset('/produkItem/'.$row->foto)}}" alt="" width="100"></td>
	      <td class="ratatengah">{{ $row->nama_produk }}</td>
	      <td class="ratatengah">Rp.{{ $row->harga }}</td>
	      <td class="ratatengah">{{ $row->jumlah_porsi }}/pcs</td>
	      <td>{{ $row->deskripsi }}</td>
	      <td class="ratatengah">Rp.{{ $row->harga_reseller}}/pcs</td>
	      <td class="ratatengah">
                <div class="row no-gutters justify-content-center">
                    <div class="col-md-12">
                        <a href="{{ url('/admin/' . $row->id . '/edit') }}" class="btn btn-success">
                            <i class="far fa-edit font-weight-bold text-white"></i>
                        </a>
                    </div>
                </div>
            </td>
            <td class="ratatengah">
            	<div class="row no-gutters justify-content-center">
	            	<div class="col-md-12">              
	                        <form action="{{ url('/admin',$row->id) }}" method="POST">
	                            @method('DELETE')
	                            @csrf
	                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash text-white"></i></button>
	                        </form>
	                </div>
            	</div>
            </td>    
	    </tr>
	    @endforeach
	  </tbody>
	</table>
@endsection
