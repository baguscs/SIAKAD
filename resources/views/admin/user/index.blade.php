@extends('admin.master')
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endpush
@section('konten')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h3 class="m-0">Data Akun Pengguna</h3>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Data Akun Pengguna</li>
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
                                <th>Role</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->pengguna->nama}}</td>
                                    <td>{{$item->role->role}}</td>
                                    <td>{{$item->email}}</td>
                                    @if ($item->pengguna->akses == null)
                                        <td><button type="button" class="btn btn-default"><i class="fas fa-check-circle"> Telah Diubah</i></button></td>
                                    @else
                                        <td>{{$item->pengguna->akses}}</td>
                                    @endif
                                    <td>
                                        @php
                                            $parameter = [
                                                'id' => $item->id,
                                            ];
                                            $id = Crypt::encrypt($parameter);
                                        @endphp
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-lg{{$loop->iteration}}">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>

                                        <div class="modal fade" id="modal-lg{{$loop->iteration}}">
                                            <div class="modal-dialog modal-lg">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h4 class="modal-title">Data Akun {{$item->pengguna->nama}}</h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <form action="{{ route('del_user', $id) }}" method="POST">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <p>Yakin Ingin Menghapus Akun {{$item->role->role}} {{$item->pengguna->nama}}?</p>
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
    <script type="text/javascript">
        $(document).ready( function (){
            $('#data').DataTable({
                searching: true,
                responsive: true,
                ordering: true,
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
@endpush