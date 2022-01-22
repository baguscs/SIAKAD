@extends('user.master')
@push('css')
    <style>
        .banner-area{background:url('img/hero3.jpg') no-repeat;background-size:cover}
        .banner-area .banner-content{min-height:450px}
        .banner-area .overlay-bg{background:rgba(7,4,31,0.6)}
        .banner-area h1{font-size:50px;margin-bottom:10px}
        .brandcum{
            color: white;
        }
        .brandcum:hover{
            color: #cea06c;
        }
        .fontAbout{
            font-size: 35px;
            color: #263a4e;
            font-weight: bold
        }
        .fontContent{
            color: #87898f;
        }
        .title{
            text-align: center;
            margin-top: 60px
        }
        .labelForm{
            color:  #263a4e;
            font-size: 17px;
            font-weight: bold
        }
        .formAction{
            margin-top: 20px;
            margin-bottom: 15px
        }
        .wrap{
            margin-bottom: 50px;
        }
    </style>
@endpush
@section('konten')
    <section class="banner-area relative" >
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center text-center banner-content">
                <div class="col-lg-12">
                    <h1 class="text-white">About Us</h1>
                    <p>
                        <a class="brandcum" href="{{ route('index') }}">Beranda</a> / About 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="brands-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <p class="fontAbout">About <br><br>
                        Persebaya Academy School
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <p class="fontContent">
                        Sekolah Akademi Persebaya merupakan sekolah pada tingkat menengah pertama, dimana sistem pendidikan sesuai dengan arahan kementrian pendidikan dan kebudayaan.
                        Namun yang membedakan sekolah akademi ini adalah lebih mengoptimalkan pengembangan kreativitas siswa dan para calon atlet dapat terus berlatih tanpa mengkhawatirkan jenjang kariernya agar menjadi atlet profesional.  
                    </p>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <div class="wrap">
        <div class="container">
            <p class="fontAbout title">Detail Information</p>
            <div class="formAction">
                <label class="labelForm">NSS</label>
                <input type="text" class="form-control" value="123432423" readonly>
            </div>
            <div class="formAction">
                <label class="labelForm">NPSN</label>
                <input type="text" class="form-control" value="213124323" readonly>
            </div>
            <div class="formAction">
                <label class="labelForm">Nama Sekolah</label>
                <input type="text" class="form-control" value="Akademi Persebaya" readonly>
            </div>
            <div class="formAction">
                <label class="labelForm">Alamat</label>
                <input type="text" class="form-control" value="Jl. Babakan Selatan No. 120, Surabaya, Jawa Timur" readonly>
            </div>
            <div class="formAction">
                <label class="labelForm">Kode Pos</label>
                <input type="text" class="form-control" value="60891" readonly>
            </div>
            <div class="formAction">
                <label class="labelForm">Tanggal Didirikan</label>
                <input type="text" class="form-control" value="17 Februari 2021" readonly>
            </div>
            @foreach ($data as $item)
                <div class="formAction">
                    <label class="labelForm">Kepala Sekolah</label>
                    <input type="text" class="form-control" value="{{$item->nama}}" readonly>
                </div>    
            @endforeach
            <div class="formAction">
                <label class="labelForm">Akreditas</label>
                <input type="text" class="form-control" value="A" readonly>
            </div>
            <div class="formAction">
                <label class="labelForm">Kecamatan</label>
                <input type="text" class="form-control" value="Kendal Sari" readonly>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
@endpush
