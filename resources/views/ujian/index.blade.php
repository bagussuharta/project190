@extends('layouts.global')

@section('title')
 CRUD Laravel - List Ujian
@endsection

@section('container')
<div class="container mt-5">
<h1 class="text-center">Daftar Ujian</h1>
<div class="card radius">
    <div class="card-body">
        <div class="action">
            <div class="row">
                <div class="col-sm">
                    <a href="/create" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="col-sm">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Matakuliah..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-primary" type="button">Cari Data</button>
                        </div>
                      </div>
                </div>
            </div>
            @if(session('status'))
            <div class="alert alert-success">
            {{session('status')}}
            </div>
        @endif
        </div>
        <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Matakuliah</th>
                <th scope="col">Dosen</th>
                <th scope="col">Jumlah Soal</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($ujian as $u)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $u->nama_mk }}</td>
                        <td>{{ $u->dosen }}</td>
                        <td>{{ $u->jumlah_soal }}</td>
                        <td>{{ $u->keterangan }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                            <a href="" class="btn btn-sm btn-warning">Update</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
</div>
@endsection
