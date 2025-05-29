@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Santri RA</h1>
    <form action="{{ route('data-ra.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_wali" class="form-label">Wali</label>
            <select name="id_wali" class="form-control" required>
                @foreach($wali as $w)
                    <option value="{{ $w->id }}">{{ $w->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection