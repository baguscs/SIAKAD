@extends('user.master')
@push('css')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <style>
        .banner-area{background:url('img/hero11.jpg') no-repeat;background-size:cover}
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
        #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #334f6c;
        color: white;
        }
        .btnInfo{
            margin-bottom: 20px
        }
        .alert {
        padding: 20px;
        background-color: #13cc1c;
        color: white;
        }

        .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
        }

        .closebtn:hover {
        color: black;
        }

        .number{
            text-align: center
        }
    </style>
@endpush
@section('konten')
    <section class="banner-area relative" >
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center text-center banner-content">
                <div class="col-lg-12">
                    <h1 class="text-white">Pendaftaran Siswa Baru</h1>
                    <p>
                        <a class="brandcum" id="myBtn" href="{{ route('index') }}">Beranda</a> / Pendaftaran 
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="container mainContent">
            @if ($messege = Session::get("pesan"))
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    <strong>Sukses!</strong> {{Session::get("pesan") }}
                </div>
            @endif
            <div class="btnInfo">
                <a href="{{ route('form') }}" class="btn btn-success">Daftar</a>
                <button class="btn btn-primary">Kuota<span class="w3-badge w3-margin-left w3-white">3</span></button>
                <button class="btn btn-info">Pendaftar<span class="w3-badge w3-margin-left w3-white">{{$count}}</span></button>
            </div>
            <table id="customers" data-page-length='25'>
                <thead>
                    <tr>
                        <th width="10px">Nomor</th>
                        <th>Nama Siswa</th>
                        <th>NISN</th>
                        <th>Asal Sekolah</th>
                        <th>Nilai UN</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td class="number">{{$number++}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->nisn}}</td>
                            <td>{{$item->asal}}</td>
                            <td>{{$item->nilai}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection
@push('js')
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready( function (){
      $('#customers').DataTable({
        "order": [[3, "desc"]],
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