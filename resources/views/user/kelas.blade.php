@extends('user.master')
@push('css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <style>
        .banner-area{background:url("{{$hero}}") no-repeat;background-size:cover}
        .banner-area .banner-content{min-height:450px}
        .banner-area .overlay-bg{background:rgba(7,4,31,0.6)}
        .banner-area h1{font-size:50px;margin-bottom:10px}
        .brandcum{
            color: white;
        }
        .brandcum:hover{
            color: #cea06c;
        }
        .mainContent{
            margin-top: 70px;
            margin-bottom: 50px
        }
        .boxClass{
            background-color: #334f6c;
            color: white;
            text-align: center
        }
        .title{
            text-align: center;
            font-weight: bold;
        }
        .grade{
            font-size: 23px;
        }
    </style>
@endpush
@section('konten')
    <section class="banner-area relative" >
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center text-center banner-content">
                <div class="col-lg-12">
                    <h1 class="text-white">Data Kelas {{$key}}</h1>
                    <p>
                        <a class="brandcum" href="{{ route('index') }}">Beranda</a> / Data Kelas {{$key}}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="container mainContent">
        <h1 class="title">Pilih Kelas</h1>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('siswa', ['grade' => $key, 'kelas' => 'A']) }}">
                    <div class="w3-hover-shadow w3-padding-64 boxClass">
                        <p class="grade">Kelas {{$key}} A</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('siswa', ['grade' => $key, 'kelas' => 'B']) }}">
                    <div class="w3-hover-shadow w3-padding-64 boxClass">
                        <p class="grade">Kelas {{$key}} B</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('siswa', ['grade' => $key, 'kelas' => 'C']) }}">
                    <div class="w3-hover-shadow w3-padding-64 boxClass">
                        <p class="grade">Kelas {{$key}} C</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
@push('js')
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready( function (){
      $('#customers').DataTable({
        searching: true,
        responsive: true,
        aoColumns: [
        {"bSortable" : false},
        {"bSortable" : false},
        {"bSortable" : false},
        {"bSortable" : false},
        ]
      });

   });
 </script>
@endpush