@extends('layouts.app')
@section('page', 'About Me')
@section('content-app')
    <div class="content-wrapper">
        <div class="content">
            <div class="container my-5 mx-12">
                <h1 class="text-center mt-4"> @yield('page')</h1>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="card card-outline card-info">
                        @foreach ($about as $about)
                            <form action="{{ route('about.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"
                                            value="{{ $about->nama_lengkap }}" required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label>Tempat Lahir</label>
                                        <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" value="{{ $about->tmp_lahir }}" required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="{{ $about->tgl_lahir }}" required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" name="jns_kelamin" id="jns_kelamin" value="{{ $about->jns_kelamin }}" class="form-control"
                                            required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label>Gol Darah</label>
                                        <input type="text" name="gol_darah" id="gol_darah" class="form-control" value="{{ $about->gol_darah }}" required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label>Alamat</label>
                                        <textarea type="text" name="alamat" id="alamat" class="form-control" required>{{ $about->alamat }}</textarea>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label>Agama</label>
                                        <input type="text" name="agama" id="agama" class="form-control" value="{{ $about->agama }}" required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label>Hobby</label>
                                        <input type="text" name="hobby" id="hobby" class="form-control" value="{{ $about->hobby }}" required>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label>No Telepon</label>
                                        <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $about->telepon }}" required>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <center>
                                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>
                                            Simpan</button>
                                    </center>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
