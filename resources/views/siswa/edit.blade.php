@extends('layouts.master')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Update Data Siswa</h3>
                    </div>
                    <div class="panel-body">
                        <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Depan</label>
                                <input type="text" name="nama_depan" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Depan" value="{{$siswa -> nama_depan}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Belakang</label>
                                <input type="text" name="nama belakang" class="form-control" id="exampleInputEmail1" aria-describedby="Nama Belakang" value="{{$siswa -> nama_belakang}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="exampleFormControlSelect1">
                                    <option value="L" @if ($siswa -> jenis_kelamin == 'L') selected @endif> Laki-laki </option>
                                    <option value="P" @if ($siswa -> jenis_kelamin == 'P') selected @endif> Perempuan </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Agama</label>
                                <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Agama" value="{{$siswa -> agama}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa -> alamat}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Foto Profile</label>
                                <input name="avatar" type="file" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-warning btn-sm">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('content1')
        <h1>Edit Data Siswa</h1>
        @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{session('sukses')}}
            </div>
        @endif
        <div class="row">
        <div class="col lg-12">
            
            </div>            
        </div>        
@endsection
