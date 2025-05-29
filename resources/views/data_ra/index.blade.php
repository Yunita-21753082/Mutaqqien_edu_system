@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Santri RA</h1>
    <a href="{{ route('data-ra.create') }}" class="btn btn-primary mb-3">Tambah Santri RA</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Nama Wali</th>
                <th>NISN</th>
                <th>NIK</th>
                <th>Asal Sekolah</th>
                <th>Alamat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dataRA as $santri)
            <tr>
                 <td>{{ $santri->nama_santri }}</td>
                <td>{{ $santri->id_kelas }}</td>
                <td>{{ $santri->jenis_kelamin }}</td>
                <td>{{ $santri->tempat_lahir }}</td>
                <td>{{ $santri->tanggal_lahir }}</td>
                <td>{{ $santri->id_wali }}</td>
                <td>{{ $santri->nisn }}</td>
                <td>{{ $santri->nik }}</td>
                <td>{{ $santri->asal_sekolah }}</td>
                <td>{{ $santri->alamat }}</td>
                <td>{{ $santri->status }}</td>
            <td>
                    <a href="{{ route('data-ra.edit', ['id_santri' => $santri->id_santri]) }}">Edit</a>
                    <form action="{{ route('data-ra.destroy', $santri->id_santri) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection