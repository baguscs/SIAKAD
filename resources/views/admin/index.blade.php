@extends('admin.master')
@push('css')
    <style>
        .colorAkun{
            background-color: #158AC4;
        }
        .colorOrgan{
            background-color: #1899D9;
        }
        .colorGuru{
            background-color: #1AA4EA;
        }
        .colorWali{
            background-color: #1EB4FF;
        }
        .colorKelas{
            background-color: #17AC44;
        }
        .colorMapel{
            background-color: #1ACA4F;
        }
        .colorSiswa{
            background-color: #1BDD55;
        }
        .colorDaftar{
            background-color: #12F657;
        }
        .colorItems{
            background-color: #D4BD0A;
        }
        .colorMedals{
            background-color: #DEC60C;
        }
        .colorActiv{
            background-color: #E9CF0C;
        }
        .colorEkstra{
            background-color: #F2D816;
        }
    </style>
@endpush
@section('konten')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Selamat Datang, Admin {{Auth::user()->pengguna->nama}}</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Home</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box colorAkun">
                        <div class="inner">
                            <h3>{{$akun}}</h3>
                            <p>Akun Pengguna</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box colorOrgan">
                        <div class="inner">
                            <h3>{{$organ}}</h3>
                            <p>Organisasi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box colorGuru">
                        <div class="inner">
                            <h3>{{$pengguna}}</h3>
                            <p>Guru dan Karyawan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box colorWali">
                        <div class="inner">
                            <h3>{{$wali}}</h3>
                            <p>Wali Kelas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box colorKelas">
                        <div class="inner">
                            <h3>{{$kelas}}</h3>
                            <p>Kelas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box colorMapel">
                        <div class="inner">
                            <h3>{{$mapel}}</h3>
                            <p>Mata Pelajaran</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box colorSiswa">
                        <div class="inner">
                            <h3>{{$mapel}}</h3>
                            <p>Siswa</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-child"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box colorDaftar">
                        <div class="inner">
                            <h3>{{$daftar}}</h3>
                            <p>Pendaftaran</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-paste"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box colorItems">
                        <div class="inner">
                            <h3>{{$items}}</h3>
                            <p>Fasilitas</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box colorMedals">
                        <div class="inner">
                            <h3>{{$medals}}</h3>
                            <p>Prestasi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-medal"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box colorActiv">
                        <div class="inner">
                            <h3>{{$activ}}</h3>
                            <p>Kegiatan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-people-carry"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box colorEkstra">
                        <div class="inner">
                            <h3>{{$ekstra}}</h3>
                            <p>Ekstrakulikuler</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-biking"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection