@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Santri RA</h1>
    <form action="{{ route('data-ra.update', $santri->id_santri) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" value="{{ $santri->nama }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_wali" class="form-label">Wali</label>
            <select name="id_wali" class="form-control" required>
                @foreach($wali as $w)
                    <option value="{{ $w->id }}" {{ $santri->id_wali == $w->id ? 'selected' : '' }}>{{ $w->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection