@extends('layouts.app')
@section('page', 'Home')
@section('content-app')
    <div class="content-wrapper">
        {{-- Main Content --}}
        <section class="content">
            <div class="container my-5 mx-12">
                <p>
                <h1 class="text-center">About Me</h1>
                </p>
                <div class="row justify-content-center align-items-center m-5">
                    <div class="col-6">
                        <h1>Nailul Ijlal Haq</h1>
                        <p>Saya Nailul Ijlal Haq Siswa dari SMKN 1 Purwosari dan Free Lancer di Hawari Technology / Tiger
                            Engine, kelahiran Indonesia yang tinggal di Pasuruan sejak 2004.
                            Saya baru menghabiskan lebih dari dua tahun untuk belajar dan menciptakan beberapa program
                            maupun website di SMKN 1 Purwosari maupun Tiger Engine,
                            bertujuan untuk mempelajari dan mengembangkan ilmu pemrograman yang sebelumnya saya sudah punya
                            mengenai dasar dasar dari ilmu tersebut.</p>
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/al.jpg') }}" alt="" class="rounded-circle">
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
