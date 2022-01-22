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
    </style>
@endpush
@section('konten')
    <section class="banner-area relative" >
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center text-center banner-content">
                <div class="col-lg-12">
                    <h1 class="text-white">Data Siswa {{$key}}</h1>
                    <p>
                        <a class="brandcum" href="{{ route('index') }}">Beranda</a> / <a class="brandcum" href="{{ route('kelas', $define) }}">Data Kelas</a> / Kelas {{$key}}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="container mainContent">
            <table id="customers" data-page-length='25'>
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>NISN</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                      </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->nisn}}</td>
                            <td>{{$item->gender}}</td>
                            <td>{{$item->agama}}</td>
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