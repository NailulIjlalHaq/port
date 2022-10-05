@extends('layouts.app')
@section('page', 'Post')
@section('content-app')
    <div class="content-wrapper">
        <div class="content">
            <div class="container my-5 mx-12">
                <h1 class="text-center mt-4"> @yield('page')</h1>
            </div>
        </div>
        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <a type="button" href="{{ route('posts.create') }}" class="btn btn-primary"><i
                                    class="fas fa-plus"></i> Tambah</a>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    <p>{{ session('success') }}</p>
                                </div>
                            @endif
                            <table id="dataTable" class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Tugas</th>
                                    <th>Deadline</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>

                                    {{--  src="{{ Storage::url('app/public/blogs/'). --}}
                                    @forelse ($post as $posts)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $posts->title }}</td>
                                            <td>{{ $posts->body }}</td>
                                            <td>
                                                <img src="{{ Storage::url("blogs/$posts->image") }}"   class="rounded" style="width: 150px">
                                            </td>
                                            <td>
                                                <form onsubmit="return confirm('Apakah Anda yakin ?')"
                                                    action="{{ route('posts.destroy', $posts->id) }}" method="POST">
                                                    <a href="{{ route('posts.edit', $posts->id) }}"
                                                        class="btn btn-warning"><i class="fas fa-edit"></i> Edit
                                                    </a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fas fa-trash"></i> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-mute">Tidak Ada Data</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
