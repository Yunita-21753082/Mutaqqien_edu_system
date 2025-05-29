@extends('layouts.admin')

@section('content')
    <h2>Edit User</h2>

    @if($errors->any())
        <ul style="color:red;">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="name" value="{{ old('name', $user->name) }}"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email', $user->email) }}"><br><br>

        <label>Password (kosongkan jika tidak diubah):</label><br>
        <input type="password" name="password"><br><br>

        <label>Role:</label><br>
        <select name="role">
            <option value="">-- Pilih --</option>
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="operator" {{ $user->role == 'operator' ? 'selected' : '' }}>Operator</option>
        </select><br><br>

        <button type="submit">Update</button>
        <a href="{{ route('users.index') }}">Batal</a>
    </form>
@endsection
