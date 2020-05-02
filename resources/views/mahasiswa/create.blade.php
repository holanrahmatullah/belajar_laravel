@extends('layout.main')

@section('title','Membuat form mahasiswa')

@section('container')

        <div class="container">
            <div class="row">
                <div class="col-10">
                    <h1 class="mt-3">Daftar Mahasiswa</h1>
                          
                    <form method="post" action="/mahasiswa">
                        
                        @csrf 
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nrp">nrp</label>
                            <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan nrp" name="nrp" >
                            @error('nrp')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email" >
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan" name="jurusan" >
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                     </form>
                        
                </div>
            </div>
        </div>
@endsection
