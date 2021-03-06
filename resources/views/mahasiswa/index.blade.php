@extends('layout.main')

@section('title','mahasiswa')

@section('container')

        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h1 class="mt-3">Daftar Mahasiswa</h1>
                        <tr>     
                        <a href="/mahasiswa/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>       
                            <table class="table"> 
                                <thead class="thead-dark">
                                <th scope="col">#</th>     
                                <th scope="col">Nama</th>     
                                <th scope="col">NRP</th>     
                                <th scope="col">Email</th>     
                                <th scope="col">Jurusan</th>     
                                <th scope="col">Aksi</th>     
                        </tr>       
                              </thead>
                                    <tbody>
                                        @foreach( $mahasiswa as $mhs )
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $mhs->nama}}</td>
                                            <td>{{ $mhs->nrp}}</td>
                                            <td>{{ $mhs->email}}</td>
                                            <td>{{ $mhs->jurusan}}</td>
                                            <td>
                                                <a href="" class="badge badge-success">Edit</a>
                                                <a href="" class="badge badge-danger">Delete</a>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                            </table> 
                              
                </div>
            </div>
        </div>
@endsection
