<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mutaqqien Edu System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    :root {
      --sidebar-bg: #ffffff;
      --sidebar-text: #333;
      --main-bg: #f8f9fa;
      --text-color: #000;
    }

    body.dark-mode {
      --sidebar-bg: #1e1e2f;
      --sidebar-text: #eee;
      --main-bg: #121212;
      --text-color: #fff;
    }

    body {
      background-color: var(--main-bg);
      color: var(--text-color);
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      transition: all 0.3s ease-in-out;
    }

    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      background-color: var(--sidebar-bg);
      color: var(--sidebar-text);
      padding: 1rem;
      overflow-y: auto;
    }

    .sidebar .nav-link {
      color: var(--sidebar-text);
      padding: 0.5rem 0.75rem;
      border-radius: 5px;
    }

    .sidebar .nav-link:hover {
      background-color: rgba(0,0,0,0.05);
    }

    .layout-wrapper {
      margin-left: 250px;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem;
    }

    .main-content {
      flex: 1;
      padding: 0 1rem 1rem 1rem;
    }

    footer {
      text-align: center;
      padding: 1rem;
      font-size: 14px;
      color: #888;
      background-color: transparent;
    }

    .dark-toggle {
      background: none;
      border: none;
      color: var(--text-color);
      font-size: 18px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h6>🧑‍🏫 Mutaqqien Edu System</h6>
    <ul class="nav flex-column">
      <li class="text-muted small">Menu</li>
      <li><a class="nav-link" href="#"><i class="fas fa-home me-2"></i>Dashboard</a></li>

      <li class="text-muted small mt-3">Data</li>
      <li><a class="nav-link" href="#"><i class="fas fa-children me-2"></i>Data Santri</a></li>
      <li><a class="nav-link" href="#"><i class="fas fa-users me-2"></i>Data Wali</a></li>

      <li>
        <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#alumniDropdown">
          <span><i class="fas fa-graduation-cap me-2"></i>Data Alumni</span>
          <i class="fas fa-angle-down"></i>
        </a>
        <div class="collapse" id="alumniDropdown">
          <ul class="nav flex-column ms-3">
            <li><a class="nav-link" href="#">Tahun Lulus 2020</a></li>
            <li><a class="nav-link" href="#">Tahun Lulus 2021</a></li>
            <li><a class="nav-link" href="#">Tahun Lulus 2022</a></li>
            <li><a class="nav-link" href="#">Tahun Lulus 2023</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>

  <div class="layout-wrapper">
    <div class="topbar">
      <h4>Selamat Datang Operator!</h4>
      <div class="d-flex align-items-center gap-3">
        <button class="dark-toggle" id="darkToggle" title="Toggle Dark Mode">
          <i class="fas fa-moon"></i>
        </button>
        <div class="dropdown">
          <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            <i class="fas fa-user-circle fa-lg me-2"></i><span>Operator</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><i class="fas fa-cog me-2"></i>Pengaturan</li>
            <li>
              <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="dropdown-item text-danger">
                  <i class="fas fa-sign-out-alt me-2"></i>Logout
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="main-content">
      @yield('content')
    </div>

    <footer>
      Directed by <strong>Staff IT PP Dempo Darul Mutaqqien</strong>
    </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('darkToggle').addEventListener('click', function () {
      document.body.classList.toggle('dark-mode');
      localStorage.setItem("dark-mode", document.body.classList.contains("dark-mode"));
    });

    // Load dark mode state
    if (localStorage.getItem("dark-mode") === "true") {
      document.body.classList.add("dark-mode");
    }
  </script>
</body>
</html>
