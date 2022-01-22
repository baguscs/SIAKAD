@extends('admin.master')
@push('css')
    <style>
        .konfirmasi{
            margin-top: 20px;
        }
        .distance{
            margin-top: 10px;
        }
    </style>
@endpush
@section('konten')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3 class="m-0">Ubah Password</h3>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Ubah Password</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->
    <section class="content">
        <div class="container-fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="{{ route('change_password') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                @if ($messege = Session::get("pesan"))
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                                        {{Session::get("pesan") }}
                                    </div>
                                @endif
                                @if ($messege = Session::get("eror"))
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                                        {{Session::get("eror") }}
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="password_old">Password</label>
                                    <input type="password" name="old_password" required autocomplete="off" class="form-control" id="password_old" placeholder="Password Lama">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label for="password">Password Baru</label>
                                        <input type="password" name="password" required autocomplete="off" class="form-control" id="password" placeholder="Password Baru">
                                    </div>
                                    <div class="col-6">
                                        <label for="confirm">Konfirmasi Password</label>
                                        <input type="password" name="password_confirmation" required autocomplete="off" class="form-control" id="confirm" placeholder="Konfirmasi Password">
                                        @error('password_confirmation')
                                            <div class="alert alert-danger alert-dismissible distance">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                                                Konfirmasi Password anda tidak sama
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row konfirmasi">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input required class="form-check-input" type="checkbox">
                                            <label class="form-check-label">Saya Mengerti dan Ingin Merubah Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row konfirmasi">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-block btn-success">Kirim</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" onclick="window.history.go(-1); return false;" class="btn btn-block btn-danger">Batal</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection