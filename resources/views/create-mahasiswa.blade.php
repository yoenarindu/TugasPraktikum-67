@extends('layouts.master')
@section('content')
    
<form method="post" action="{{ route('save-mahasiswa') }}">
    {{ csrf_field() }}
    <div class="row mt-3">
        <div class="col">
        <label for="nama" class="form-label"><h5>Nama Mahasiswa</h5></label>
        <input type="text" class="form-control form-control-lg" placeholder="Nama Lengkap" name="nama">
        </div>
        <div class="col">
        <label for="email" class="form-label"><h5>Alamat Email</h5></label>
        <input type="text" class="form-control form-control-lg" placeholder="Email" name="email">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
        <label for="nim" class="form-label"><h5>NIM</h5></label>
        <input type="text" class="form-control form-control-lg" placeholder="NIM" name="nim">
        </div>
        <div class="col">
        <label for="alamat" class="form-label"><h5>Alamat Rumah</h5></label>
        <input type="text" class="form-control form-control-lg" placeholder="Alamat" name="alamat">
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary float-right" name="kirim">Tambahkan</button>
</form>

@endsection



