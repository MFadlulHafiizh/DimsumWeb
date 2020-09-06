@extends('layout.templateNav')

@section('title', 'Introduction')

@section('style')
    <link rel="stylesheet" href="assets/css/style.css">
@endsection

@section('introduction', 'aktif')
@section('produk', 'sliding-underline')
@section('help', 'sliding-underline')
@section('about', 'sliding-underline')
@section('contact', 'sliding-underline')
    

<body class="bdr">
    @section('container')
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6 icon1 p-5">
                <h2 class="ha1">PENASARAN DENGAN SEJARAH KAMI?</h2>
                Sadulur dimsum berdiri pada Tahun 2017 dan dengan kerja keras kami akan selalu memberikan inovasi - inovasi olahan rasa yang berbeda dari produsen lain nya. Nama Sadulur Dimsum terinspirasi dari 80% yang bekerja sama adalah keluarga besar, mulai dari investasi, produksi dan penjualan serta managemen semua didukung oleh keluarga besar yang notabanenya adalah satu garis keturunan dan kami ingin menjadikan Produk Dimsum kami adalah produk Dimsum yang bisa turun menurun dan tak lekang oleh perputaran generasi.
            <br>
            <br>
            <a href="{{url('/produk')}}" class="btn btn-color mt-4 font-weight-bolder">LIHAT PRODUK KAMI YUK!</a>
            </div>
            <div class="col-md-6 icon">
                <img src="item/icon_utama.png" class="img-fluid" alt="Dimsum Sadulur">
            </div>
        </div>
    </div>

    @endsection
    @section('script')
    @endsection
</body>
