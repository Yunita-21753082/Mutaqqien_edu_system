@extends('layouts.admin')

@section('content')
    <h2>Data Admin & Operator</h2>

    @if(session('success')) <p style="color:green;">{{ session('success') }}</p> @endif
    @if(session('error')) <p style="color:red;">{{ session('error') }}</p> @endif

    <a href="{{ route('users.create') }}">+ Tambah User</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th><th>Email</th><th>Role</th><th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ ucfirst($user->role) }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="4">Belum ada data user.</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
