<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        header {
            background-color: #343a40;
            color: white;
            padding: 15px 20px;
        }

        header h1 {
            margin: 0;
            font-size: 20px;
        }

        nav {
            background-color: #495057;
            padding: 10px 20px;
        }

        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            padding: 20px;
        }

        table {
            width: 100%;
            background-color: white;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #f1f1f1;
        }

        form {
            background-color: white;
            padding: 15px;
            border: 1px solid #ccc;
            max-width: 500px;
        }

        input, select, button {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
        }

        a.button {
            display: inline-block;
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            margin-top: 10px;
        }

        a.button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <header>
        <h1>Panel Admin</h1>
    </header>

    <nav>
        <a href="{{ route('users.index') }}">Manajemen User</a>
        <a href="/">Kembali ke Beranda</a>
    </nav>

    <main>
        @yield('content')
    </main>

</body>
</html>
