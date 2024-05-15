@extends('layouts.back')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Peserta</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Form Edit Data Peserta -->
    <form action="{{route('peserta.update', $peserta->id)}}" method="POST">
            @csrf
            @method('PUT')
        <div class="row align-items-stretch mb-5">
            <div class="col-md-6">
                <div class="form-group text-center">
                    <!-- KTP -->
                    <input class="form-control" type="number" id="ktp" name="ktp" value="{{$peserta->ktp}}" placeholder="Nomor KTP *" data-sb-validations="required" />                    </div>
                
                <div class="form-group">
                    <!-- Nama-->
                    <input class="form-control" type="text" id="nama" name="nama" value="{{$peserta->nama}}" placeholder="Nama Pendaftar *" data-sb-validations="required" />
                </div>

                <div class="form-group">
                    <!-- Instansi-->
                    <input class="form-control" type="text" id="instansi" name="instansi" value="{{$peserta->instansi}}" placeholder="Nama Instansi *" data-sb-validations="required" />
                </div>
                
                <div class="form-group">
                    <!-- Alamat-->
                    <input class="form-control" type="text" id="alamat" name="alamat" value="{{$peserta->alamat}}" placeholder="Nama Instansi *" data-sb-validations="required" />
                    
                </div>

                <div class="form-group mb-3">
                    <!-- Jumlah Peserta-->
                    <input class="form-control" type="number" id="jumlah" name="jumlah" value="{{$peserta->jumlah}}" placeholder="Jumlah Peserta *" data-sb-validations="required" />
                </div>

                <div class="form-group">
                    <!-- Jenis Layanan-->
                    <select class="form-control" id="layanan" name="layanan">
                            <option value="">{{$peserta->layanan}}</option>
                            <option value="Kunjungan Wisata">Kunjungan Wisata</option>
                            <option value="Permintaan Narasumber">Permintaan Narasumber</option>
                            <option value="Dokumentasi Acara">Dokumentasi Acara</option>
                            <option value="Live Streaming">Live Streaming</option>
                    </select>                           
                </div>         
                <div class="btn-update">
                    <button type="submit" class="btn btn-success btn-md">Update Sekarang</button>
                </div>                  
            </div>
        </div>
    </form>
    
</div>
@endsection()
  