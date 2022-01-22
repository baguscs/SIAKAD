@extends('user.master')
@push('css')
    <style>
        .banner-area{background:url('img/hero12.jpg') no-repeat;background-size:cover}
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
        .infoForm{
            color: red;
            font-style: italic;
        }
        .warning{
            margin-top: 10px
        }
        #img1{  
            padding:5px;
            width: 45%;
            margin-left: 120px;
        }
        #img2{  
            padding:5px;
            width: 45%;
            margin-left: 120px;
        }
        .row    {
            margin-top: 20px
        }
        .btn{
            font-size: 15px
        }

        .alert {
        padding: 20px;
        background-color: #d82a0c;
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

        .check {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 18px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        }

        /* Hide the browser's default checkbox */
        .check input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
        height: 0;
        width: 0;
        }

        /* Create a custom checkbox */
        .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        }

        /* On mouse-over, add a grey background color */
        .check:hover input ~ .checkmark {
        background-color: #ccc;
        }

        /* When the checkbox is checked, add a blue background */
        .check input:checked ~ .checkmark {
        background-color: #2196F3;
        }

        /* Create the checkmark/indicator (hidden when not checked) */
        .checkmark:after {
        content: "";
        position: absolute;
        display: none;
        }

        /* Show the checkmark when checked */
        .check input:checked ~ .checkmark:after {
        display: block;
        }

        /* Style the checkmark/indicator */
        .check .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
        }
</style>
@endpush
@section('konten')
    <section class="banner-area relative" >
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center text-center banner-content">
                <div class="col-lg-12">
                    <h1 class="text-white">Formulir Pendaftaran</h1>
                    <p>
                        <a class="brandcum" href="{{ route('index') }}">Beranda</a> / <a href="{{ route('daftar') }}" class="brandcum">Data Pendaftar</a> / Formulir Pendaftaran
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="wrap">
        <div class="container">
            <p class="fontAbout title">Data Siswa Pendaftar</p>
            <p class="infoForm">*Mohon isi formulis sesuai dengan data yang ada, jika ada kesalahan mohon konfirmasi ke pihak sekolah</p>
            <form action="{{ route('regis') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="formAction">
                    <label class="labelForm">Nama Siswa</label>
                    <input type="text" class="form-control" value="{{old('nama')}}" name="nama" required>
                </div>
                <div class="formAction">
                    <label class="labelForm">NISN</label>
                    <input type="text" class="form-control" value="{{old('nisn')}}" name="nisn" required>
                </div>
                <div class="formAction">
                    <label class="labelForm">Asal Sekolah</label>
                    <input type="text" class="form-control" value="{{old('asal')}}" name="asal" required>
                </div>
                <div class="formAction">
                    <label class="labelForm">Nilai Ujian Nasional</label>
                    <input type="number" class="form-control" name="nilai" value="{{old('nilai')}}" required max="300" min="0">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="labelForm">Foto SKHUN</label>
                        <input type="file" class="form-control" name="skhun" required id="skhun">
                        <p class="warning">File Extensi : jpg, jpeg, png <br>
                            Ukuran Maximal File: 400KB
                        </p>
                        @error('skhun')
                            <div class="alert">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong>Peringatan!</strong> {{ $message }}
                            </div>
                        @enderror
                        <div>
                            <img src="{{ asset('img/no-pict.png') }}" id="img1" alt="Preview Gambar">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="labelForm">Foto Akta Kelahiran</label>
                        <input type="file" class="form-control" name="akta" required id="akta">
                        <p class="warning">File Extensi : jpg, jpeg, png <br>
                            Ukuran Maximal File: 400KB
                        </p>
                        @error('akta')
                            <div class="alert">
                                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                <strong>Peringatan!</strong> {{ $message }}
                            </div>
                        @enderror
                        <div>
                            <img src="{{ asset('img/no-pict.png') }}" id="img2" alt="Preview Gambar">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="check"> Saya telah mengisi data tersebut dengan benar dan nyata, jika ada kesalahan saya siap untuk bertanggung jawab
                        <input type="checkbox" required>
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-block genric-btn info circle">Daftarkan Sekarang</button>
                    </div>
                    <div class="col-md-6">
                        <button onclick="javascript:history.back()" class="btn btn-block genric-btn danger circle">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        function bacaGambar(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img1').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function bacaAkta(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img2').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#skhun").change(function(){
        bacaGambar(this);
        });

        $("#akta").change(function(){
        bacaAkta(this);
        });
    </script>
@endpush
