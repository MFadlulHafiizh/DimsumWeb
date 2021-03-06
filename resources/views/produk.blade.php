@extends('layout.templateNav')

@section('title', 'Produk')

@section('style')
    <link rel="stylesheet" href="{{ URL::asset('/assets/css/style.css')}}">
@endsection

@section('introduction', 'sliding-underline')
@section('produk', 'aktif')
@section('help', 'sliding-underline')
@section('about', 'sliding-underline')
@section('contact', 'sliding-underline')

<body class="bodi">
@section('container')
    <div class="row no-gutters">
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide ml-auto" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/item/menu1.png" class="d-block w-100 gambar" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/item/menu2.png" class="d-block w-100 gambar" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/item/menu3.png" class="d-block w-100 gambar" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-3">
                <img src="/item/varian.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-9">
                <form action="{{ url('/produk/search')}}" method="GET" class="form-inline my-2 my-lg-0 ml-2 ">
                    <div class=" input-group mt-3 w-100 float-right ml-auto ">
                        <input type=" text " name="search" class=" form-control cari text-dark" placeholder=" Search " value="{{ old('search') }}" aria-label=" Recipient 's username" aria-describedby="basic-addon2">
                        <div class="input-group-append ">
                            <button type="submit" class="input-group-text" id="basic-addon2">
                                <a href="{{url('/produk')}}" class="text-decoration-none text-white"><i class="fas fa-sync-alt"></i></a>
                            </button>
                        </div>
                        <div class="input-group-append">
                            <button type="submit" class="input-group-text border-left-0 bg-success " id="basic-addon2">
                                <a class="text-decoration-none text-white" href=""><i
                                        class="fas fa-search"></i></a>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>
        <div class="row p-5" >
        @foreach($konten as $row)
            
            	<a class="text-decoration-none" href="{{ url('/produk/' . $row->id . '/detail') }}">
                    <div class="card mr-2 ml-2 mb-4" style=" width: 16rem; height: 29rem;">
                        <img src="{{asset('/produkItem/'.$row->foto)}}" alt=" ..." style="height: 18rem;">
                        <div class="card-body bg-light h-75">
                            <h5 class="card-title" style="color: black;">{{ $row->nama_produk }}</h5>
                            <p class="font-weight-bold text-danger mb-3">Rp.{{ $row->harga }}</p>
                            <button class="btn btn-success">Detail</button>
                            
                        </div>
                    </div>
                </a>
            
        @endforeach
        </div>
@endsection
@section('script')
@endsection
</body>
