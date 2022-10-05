@extends('layouts.app')
@section('page', 'Tambah Post')
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
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        <p>{{ session('success') }}</p>
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label class="font-weight-bold">GAMBAR</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                                </div>
                                <div class="form-group">
                                    <label>Tugas</label>
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Deadline</label>
                                    <input type="date" name="body" id="body" class="form-control">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">
                                    Simpan</button>
                                <a href="{{ route('posts.index') }}" class="btn btn-danger">
                                    Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <!-- /.content -->
    </div>
@endsection
