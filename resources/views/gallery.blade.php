@extends('layouts.app')
@section('page', 'Gallery')
@section('content-app')
    <div class="content-wrapper">
        {{-- Main Content --}}
        <section class="content">
            <div class="container my-5 mx-12">
                <h2 class="text-center mt-4 text-decoration-underline">This Is My Gallery</h2>
                <div class="row">
                    <div class="col-6 mt-5">
                        <div class="card">
                            <img src="{{ asset('img/cont1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Project Sekolah</h5>
                                <p class="card-text">Salah satu project yang sedang saya kerjakan dari Sekolah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="card">
                            <img src="{{ asset('img/cont2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Project Free Lance</h5>
                                <p class="card-text">Salah satu project yang sedang saya kerjakan dari tempat Free Lance.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="card">
                            <img src="{{ asset('img/cont3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Tampilan</h5>
                                <p class="card-text">Salah satu tampilan project yang sedang saya kerjakan.</p>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection
