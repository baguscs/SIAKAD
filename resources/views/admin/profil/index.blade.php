@extends('admin.master')
@section('konten')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Edit Profile</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                         src="{{ asset('storage/pengguna/'. Auth::user()->pengguna->foto) }}"
                         alt="User profile picture">
                  </div>
  
                  <h3 class="profile-username text-center">{{Auth::user()->pengguna->nama}}</h3>
  
                  <p class="text-muted text-center">{{Auth::user()->pengguna->tugas}}</p>
                  <p class="text-muted text-center">{{Auth::user()->pengguna->guru->mapel->mapel}}</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
              <!-- About Me Box -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">About Me</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <strong><i class="fas fa-book mr-1"></i> Education</strong>
  
                  <p class="text-muted">
                    {{Auth::user()->pengguna->tamat}}
                  </p>
  
                  <hr>
  
                  <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>
  
                  <p class="text-muted">{{Auth::user()->pengguna->alamat}}</p>
  
                  <hr>
  
                  <strong><i class="fas fa-calendar-day mr-1"></i> Since</strong>
  
                  <p class="text-muted">{{Auth::user()->pengguna->sejak}}</p>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-body">
                  <div class="tab-content">
                    <div class=" active tab-pane" id="settings">
                      <form class="form-horizontal" method="POST" action="{{ route('edited') }}">
                        @csrf
                        @if ($messege = Session::get("pesan"))
                          <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                            {{Session::get("pesan") }}
                          </div>
                        @endif
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                          <div class="col-sm-10">
                            <input class="form-control" readonly id="inputName" value="{{Auth::user()->pengguna->nama}}" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">NIP</label>
                          <div class="col-sm-10">
                            <input class="form-control" readonly id="inputEmail" value="{{Auth::user()->pengguna->nip}}" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Tempat, Tangga Lahir</label>
                          <div class="col-sm-10">
                            <input type="text" readonly class="form-control" id="inputName2" value="{{Auth::user()->pengguna->ttg}}" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">No. Telp</label>
                          <div class="col-sm-10">
                            <input type="text" readonly class="form-control" id="inputName2" value="{{Auth::user()->pengguna->telpon}}" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Username</label>
                          <div class="col-sm-10">
                            <input type="text" required name="username" class="form-control" value="{{Auth::user()->pengguna->nip}}" id="inputSkills" placeholder="Username">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <div class="checkbox">
                              <label>
                                <input required type="checkbox"> Saya yakin mengganti profil
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Kirim</button>
                            <button type="button" onclick="window.history.go(-1); return false;" class="btn btn-danger">Batal</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
@endsection