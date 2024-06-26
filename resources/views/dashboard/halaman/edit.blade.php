@extends('dashboard/layout')

@section('content')
<div class="pb-3"><a href="{{ route('halaman.index')}}" class="btn btn-secondary"><< Kembali</a></div>

<form action="{{ route('halaman.update', $data->id) }}" method="post">
    @csrf
    @method('put')
    <div class="mb-3">
      <label for="" class="form-label">Judul</label>
      <input type="text"
        class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId" placeholder="Masukkan Judul" value="{{ $data->judul }}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Isi</label>
        <textarea class="form-control summernote" name="isi" id="isi" rows="10">{{ $data->isi }}</textarea>
      </div>

      <button class="btn btn-primary" name="simpan" type="submit">Update</button>
</form>

@endsection