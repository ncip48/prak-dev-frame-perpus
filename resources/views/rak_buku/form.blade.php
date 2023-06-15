@extends('layouts.app')
@section('title', 'Daftar Rak Buku')
@section('content')
<h2>{{ $store }} Data Rak Buku</h2>
<form method="POST" action="{{$action}}">
    @csrf
    @if (strtolower($store) == 'ubah')
    @method('PUT')
    @endif
    <input type="hidden" name="id" value="{{ $rak->id }}" />
    <div class="form-group">
    <input type="text" class="mail_text" name="nama" placeholder="NamaRak" value="{{ $rak->nama }}" />
    @error('nama')
    <b>{{$message}}</b>
    @enderror
    </div>
    <div class="form-group">
    <input type="text" class="mail_text" name="lokasi" placeholder="Lokasi" value="{{ $rak->lokasi }}" />
    @error('lokasi')
    <b>{{$message}}</b>
    @enderror
    </div>
    <input type="text" class="mail_text" name="keterangan" placeholder="keterangan" value="{{ $rak->keterangan }}" />
    <input type="submit" value="{{ $store }}" />
    <div class="send_bt">
        <a href="{{ url('/rak_buku') }}">Kembali</a>
    </div>
</form>
@endsection