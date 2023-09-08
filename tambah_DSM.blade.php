@extends('layouts.main')

@section('container')
<div class="col-lg-6 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2
mb-3 border-bottom">
<h1 class="h2">Tambah</h1>
</div>
<div class="col-lg-6">
      <form action="/insertdata" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="alamat_pengirim" class="form-label">Alamat Pengirim</label>
          <input type="text" class="form-control" id="alamat_pengirim" name="alamat_pengirim">
        </div>
        <div class="mb-3">
          <label for="hari_tanggal" class="form-label">Tanggal</label>
          <input type="text" class="form-control" id="hari_tanggal" name="hari_tanggal">
        </div>
        <div class="mb-3">
          <label for="no_surat" class="form-label">Nomor Surat</label>
          <input type="text" class="form-control" id="no_surat" name="no_surat">
        </div>
        <div class="mb-3">
          <label for="perihal" class="form-label">Perihal</label>
          <input type="text" class="form-control" id="perihal" name="perihal">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection