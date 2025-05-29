@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Data Santri</h4>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahSantri">+ Tambah Santri</button>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NISN</th>
                <th>JK</th>
                <th>Asal Sekolah</th>
                <th>Unit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($santris as $santri)
            <tr>
                <td>{{ $santri->nama_santri }}</td>
                <td>{{ $santri->nisn }}</td>
                <td>{{ $santri->jenis_kelamin }}</td>
                <td>{{ $santri->asal_sekolah }}</td>
                <td>{{ $santri->unit->nama_unit ?? '-' }}</td>
                <td>
                    <!-- Tombol Edit -->
                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditSantri{{ $santri->id_santri }}">Edit</button>

                    <!-- Form Hapus -->
                    <form action="{{ route('santri.destroy', $santri->id_santri) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>

                    <form class="d-flex mb-3" method="GET" action="{{ route('santri.index') }}">
                    <input type="text" name="search" class="form-control me-2" placeholder="Cari nama / nisn / sekolah..." value="{{ request('search') }}">
                    <button class="btn btn-outline-primary">Cari</button>
                    </form>

                </td>
            </tr>

            <!-- Modal Edit -->
            <div class="modal fade" id="modalEditSantri{{ $santri->id_santri }}" tabindex="-1">
              <div class="modal-dialog">
                <form class="modal-content" method="POST" action="{{ route('santri.update', $santri->id_santri) }}">
                    @csrf @method('PUT')
                    <div class="modal-header"><h5>Edit Santri</h5></div>
                    <div class="modal-body">
                        <input name="nama_santri" value="{{ $santri->nama_santri }}" class="form-control mb-2" required>
                        <input name="nisn" value="{{ $santri->nisn }}" class="form-control mb-2" required>
                        <select name="jenis_kelamin" class="form-control mb-2">
                            <option>Laki-laki</option>
                            <option>Perempuan</option>
                        </select>
                        <input name="asal_sekolah" value="{{ $santri->asal_sekolah }}" class="form-control mb-2">
                        <select name="id_unit" class="form-control mb-2">
                            @foreach($unit as $u)
                            <option value="{{ $u->id_unit }}" {{ $santri->id_unit == $u->id_unit ? 'selected' : '' }}>{{ $u->nama_unit }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-success">Simpan</button>
                    </div>
                </form>
              </div>
            </div>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambahSantri" tabindex="-1">
  <div class="modal-dialog">
    <form class="modal-content" method="POST" action="{{ route('santri.store') }}">
        @csrf
        <div class="modal-header"><h5>Tambah Santri</h5></div>
        <div class="modal-body">
            <input name="nama_santri" class="form-control mb-2" placeholder="Nama" required>
            <input name="nisn" class="form-control mb-2" placeholder="NISN" required>
            <select name="jenis_kelamin" class="form-control mb-2">
                <option>Laki-laki</option>
                <option>Perempuan</option>
            </select>
            <input name="asal_sekolah" class="form-control mb-2" placeholder="Asal Sekolah">
            <select name="id_unit" class="form-control mb-2">
                @foreach($unit as $u)
                <option value="{{ $u->id_unit }}">{{ $u->nama_unit }}</option>
                @endforeach
            </select>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button class="btn btn-primary">Simpan</button>
        </div>
    </form>
  </div>
</div>
@endsection
