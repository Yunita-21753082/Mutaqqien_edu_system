@extends('layouts.admin')

@section('content')
    <h2>Tambah User</h2>

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label>Password:</label><br>
        <input type="password" name="password"><br><br>

        <label>Role:</label><br>
        <select name="role">
            <option value="">-- Pilih --</option>
            <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="operator" {{ old('role') == 'operator' ? 'selected' : '' }}>Operator</option>
        </select><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('users.index') }}">Kembali</a>
    </form>
@endsection
