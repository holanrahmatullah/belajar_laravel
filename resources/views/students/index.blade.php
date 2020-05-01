@extends('layout.main')

@section('title','mahasiswa')

@section('container')

        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1 class="mt-3">Daftar Students</h1>

                        <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <ul class="list-group">
                        @foreach( $students as $students)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $students->nama }}
                            <a href="/students/{{ $students->id }}" class="badge badge-info">detail</a>
                        </li>       
                        @endforeach
                </div>
            </div>
        </div>
@endsection
