@extends('layout.templateNav')

@section('title', 'Produk')

@section('style')
    <link rel="stylesheet" href="assets/css/style.css">
@endsection

@section('introduction', 'sliding-underline')
@section('produk', 'aktif')
@section('help', 'sliding-underline')
@section('about', 'sliding-underline')
@section('contact', 'sliding-underline')

<body>
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
                        <img src="item/menu1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="item/menu2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="item/menu3.png" class="d-block w-100" alt="...">
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
        <form class="form-inline my-2 my-lg-0 ml-2 ">
            <input class="form-control mr-sm-2 w-25" type="search" placeholder="Cari disini..." aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <br>
        @foreach($produk as $row)
    	<a class="text-decoration-none float-left m-auto d-block" href="#">
            <div class="card mr-2 ml-2 mb-3" style=" width: 16rem; height: 22rem; ">
                <img style=" width: 100%;" src="{{asset('/produkItem/'.$row->foto)}}" class=" card-img-top" alt=" ...">
                <div class="card-body bg-light ">
                    <h5 class="card-title" style="color: black;">{{ $row->nama_produk }}</h5>
                    <p class="font-weight-bold text-danger mb-3">Rp.{{ $row->harga }}</p>
                    <p class="text text-secondary">jumlah/porsi {{ $row->jumlah_porsi }}</p>
                    <i class=" fas fa-star text-warning "></i>
                    <i class=" fas fa-star text-warning "></i>
                    <i class=" fas fa-star text-warning "></i>
                    <i class=" fas fa-star text-warning "></i>
                    <i class=" fas fa-star-half-alt text-warning "></i>
                    <span class="text-secondary" style="font-size: smaller;"></span>
                </div>
            </div>
        </a>
        @endforeach
    </div>

@endsection
@section('script')
@endsection
</body>
