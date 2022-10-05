@extends('layouts.app')
@section('page', 'Edit Posts')
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
                        <form action="{{ route('posts.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
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
                                    <input type="file" class="form-control" name="image">{{$item->image}}
                                </div>
                                <div class="form-group">
                                    <label>Tugas</label>
                                    <input type="text" name="title" id="title" class="form-control"
                                        value="{{ $item->title }}">
                                </div>
                                <div class="form-group mt-2">
                                    <label>Deadline</label>
                                    <input type="date" name="body" id="body" class="form-control"
                                        value="{{ $item->body }}">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>
                                    Simpan</button>
                                <a href="{{ route('posts.index') }}" class="btn btn-danger"><i class="fas fa-undo"></i>
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
