@extends('admin.master')
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link href="{{ asset('jquery/jquery-ui.css') }}" rel="stylesheet">  
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
@endpush
@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3 class="m-0">Data Guru dan Karyawan</h3>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Data Guru dan Karyawan</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="card-body">
                    @if ($messege = Session::get("pesan"))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                            {{Session::get("pesan") }}
                        </div>
                    @endif
                    <table id="data" class="table table-hover">
                        <thead class="table-primary">
                            <tr>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Alamat</th>
                                <th>Tugas</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->nip}}</td>
                                    <td>{{$item->alamat}}</td>
                                    <td>{{$item->tugas}}</td>
                                    <td>
                                        @php
                                            $parameter = [
                                                'id' => $item->id,
                                            ];
                                            $id = Crypt::encrypt($parameter);
                                        @endphp

                                        <button type="button" title="Edit" class="btn btn-info" data-toggle="modal" data-target="#edit{{$loop->iteration}}">
                                            <i class="fas fa-pen-square"></i>
                                        </button>

                                        <div class="modal fade" id="edit{{$loop->iteration}}">
                                            <div class="modal-dialog modal-xl">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Edit Data {{$item->tugas}} {{$item->nama}}</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <form action="" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label for="nama">Nama</label>
                                                                    <input type="text" name="nama" class="form-control" id="nama" value="{{$item->nama}}" placeholder="Nama Guru atau Karyawan" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if ($item->nip != null)
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="nip">NIP</label>
                                                                        <input type="number" name="nip" class="form-control" id="nip" value="{{$item->nip}}" placeholder="Nomor Induk Pegawai" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="identy">No. Identitas</label>
                                                                        <input type="number" name="identitas" class="form-control" id="identy" value="{{$item->identitas}}" placeholder="Nomor Induk Pegawai" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if ($item->struktur_id != null)
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="jabatan">Jabatan</label>
                                                                        <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{$item->struktur->jabatan}}" placeholder="Jabatan" required readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="ttg">Tempat, Tanggal Lahir</label>
                                                                    <input type="text" name="ttg" class="form-control" id="ttg" value="{{$item->ttg}}" placeholder="Jabatan" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="alamat">Alamat</label>
                                                                    <input type="text" name="alamat" class="form-control" id="alamat" value="{{$item->alamat}}" placeholder="Jabatan" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="telp">No. Telepon</label>
                                                                    <input type="number" name="telpon" class="form-control" id="telp" value="{{$item->telpon}}" placeholder="No. Telepon" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="tamat">Pendidikan Terakhir</label>
                                                                    <input type="text" name="tamat" class="form-control" id="tamat" value="{{$item->tamat}}" placeholder="Pendidikan Terakhir" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label>Tugas</label>
                                                                    <select class="form-control" id="tugas{{$loop->iteration}}" name="tugas" required>
                                                                        <option value="Guru">Guru</option>
                                                                        <option value="Karyawan">Karyawan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="sejak">Bertugas Sejak</label>
                                                                    <div class="input-group date" data-target-input="nearest">
                                                                        <input type="text" id="date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"> Hapus</i></button>
                                                    </div>
                                                </form>
                                              </div>
                                              <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->

                                        <button type="button" title="Hapus" class="btn btn-danger" data-toggle="modal" data-target="#modal-lg{{$loop->iteration}}">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>

                                        <div class="modal fade" id="modal-lg{{$loop->iteration}}">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Data Akun {{$item->nama}}</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <form action="{{ route('del_user', $id) }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p>Yakin Ingin Menghapus Akun ?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"> Hapus</i></button>
                                                    </div>
                                                </form>
                                              </div>
                                              <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->

                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('jquery/external/jquery.js') }}"></script>
    <script src="{{ asset('jquery/jquery-ui.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
        $(document).ready( function (){
            $('#data').DataTable({
                searching: true,
                responsive: true,
                ordering: false,
                aoColumns: [
                {"bSortable" : false},
                {"bSortable" : false},
                {"bSortable" : false},
                {"bSortable" : false},
                {"bSortable" : false},
                ]
            });
        });
    </script>
    <script>
        $( "#date" ).datepicker({
            inline: false
        });
        @foreach($data as $row)
            $('#tugas{{$loop->iteration}}').val('{{$row->tugas}}').attr('selected', true);
        @endforeach

        
    </script>
@endpush