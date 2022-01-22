@extends('user.master')
@push('css')
    <style>
        .banner-area{background:url('img/hero7.jpg') no-repeat;background-size:cover}
        .banner-area .banner-content{min-height:450px}
        .banner-area .overlay-bg{background:rgba(7,4,31,0.6)}
        .banner-area h1{font-size:50px;margin-bottom:10px}
        .brandcum{
            color: white;
        }
        .brandcum:hover{
            color: #cea06c;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 100%;
        }
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
        .containerCard {
            padding: 2px 16px;
            text-align: center
        }
        .containerSection{
            margin: 50px
        }

        .modal {
        display: none;
        background-color: transparent;
        transition: all 0.25s ease;
        }

        .modal.open {
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100vh;
        background-color: rgba(0, 0, 0, 0.5);
        }

        .modal .content-wrapper {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: left;
        justify-content: flex-start;
        width: 90%;
        margin: 0;
        padding: 2.5rem;
        background-color: white;
        border-radius: 0.3125rem;
        box-shadow: 0 0 2.5rem rgba(0, 0, 0, 0.5);
        }

        .modal .content-wrapper .close {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.5rem;
        height: 2.5rem;
        border: none;
        background-color: transparent;
        font-size: 1.5rem;
        transition: 0.25s linear;
        }

        .modal .content-wrapper .close:before, .modal .content-wrapper .close:after {
        position: absolute;
        content: '';
        width: 1.25rem;
        height: 0.125rem;
        background-color: black;
        }

        .modal .content-wrapper .close:before { transform: rotate(-45deg); }

        .modal .content-wrapper .close:after { transform: rotate(45deg); }

        .modal .content-wrapper .close:hover { transform: rotate(360deg); }

        .modal .content-wrapper .close:hover:before, .modal .content-wrapper .close:hover:after { background-color: #cea06c; }

        .modal .content-wrapper .modal-header {
        position: relative;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        width: 100%;
        margin: 0;
        padding: 0 0 1.25rem;
        }

        .modal .content-wrapper .modal-header h2 {
        font-size: 1.5rem;
        font-weight: bold;
        }

        .modal .content-wrapper .content {
        position: relative;
        display: flex;
        }

        .modal .content-wrapper .content p {
        font-size: 0.875rem;
        line-height: 1.75;
        }

        .modal .content-wrapper .modal-footer {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        width: 100%;
        margin: 0;
        padding: 1.875rem 0 0;
        }

        .modal .content-wrapper .modal-footer > button {
        margin-left: 0.625rem;
        padding: 0.625rem 1.25rem;
        border: none;
        background-color: slategray;
        color: white;
        font-size: 0.87rem;
        font-weight: 300;
        }

        .modal .content-wrapper .modal-footer > button:first-child { background-color: #2ecc71; }

        .modal .content-wrapper .modal-footer > button:last-child { background-color: #e74c3c; }
        .cardContent{
            margin-top: 30px
        }
        .trigger{
            margin-top: 15px;
        }
        .titleCard{
            margin-top: 10px;
            text-transform: capitalize;
        }
        .about{
            margin-left: 70px;
        }
    </style>
@endpush
@section('konten')
<section class="banner-area relative" >
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center text-center banner-content">
            <div class="col-lg-12">
                <h1 class="text-white">Prestasi</h1>
                <p>
                    <a class="brandcum" id="myBtn" href="{{ route('index') }}">Beranda</a> / Prestasi 
                </p>
            </div>
        </div>
    </div>
</section>
<div class="row">
    @foreach ($data as $item)
        <div class="col-md-6">
            <div class="containerSection">
                <div class="card">
                    <img src="{{ asset('storage/medals/'. $item->foto) }}" alt="Avatar" style="width:100%">
                    <div class="containerCard">
                    <h2 class="titleCard"><b>{{$item->nama}}</b></h2> 
                    <p><button data-modal-trigger="trigger-demo{{$loop->iteration}}" class="btn btn-block genric-btn info circle trigger">
                        More Info
                    </button></p>
                    <div data-modal="trigger-demo{{$loop->iteration}}" class="modal">
                        <article class="content-wrapper">
                        <button class="close"></button>
                        <header class="modal-header">
                            <h2>Detail Prestasi {{$item->nama}}</h2>
                        </header>
                        <div class="content">
                            <div class="row cardContent">
                                <div class="col-md-5">
                                    <img class="imgModals" src="{{ asset('storage/medals/'. $item->foto) }}" alt="" width="180%" height="110%">
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-6">
                                    <p class="about">{{$item->konten}}</p>
                                </div>
                            </div>
                        </div>
                        </article>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        const buttons = document.querySelectorAll(`button[data-modal-trigger]`);

        for(let button of buttons) {
        modalEvent(button);
        }

        function modalEvent(button) {
        button.addEventListener('click', () => {
            const trigger = button.getAttribute('data-modal-trigger');
            const modal = document.querySelector(`[data-modal=${trigger}]`);
            const contentWrapper = modal.querySelector('.content-wrapper');
            const close = modal.querySelector('.close');

            close.addEventListener('click', () => modal.classList.remove('open'));
            modal.addEventListener('click', () => modal.classList.remove('open'));
            contentWrapper.addEventListener('click', (e) => e.stopPropagation());

            modal.classList.toggle('open');
        });
        }
    </script>
@endpush