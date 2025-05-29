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
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f5f7fa;
      transition: background-color 0.3s, color 0.3s;
      margin: 0;
      min-height: 100vh;
      display: flex;
    }

    body.dark-mode {
      background-color: #121212;
      color: #f1f1f1;
    }

    .layout-wrapper {
      flex: 1;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin-left: 250px;
    }

    .main-content {
      padding: 20px;
      flex: 1;
    }

    footer {
      text-align: center;
      padding: 15px;
      font-size: 0.9rem;
      color: #999;
      background-color: transparent;
    }

    .sidebar {
      width: 250px;
      background-color: #fff;
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      border-right: 1px solid #dee2e6;
      padding-top: 60px;
      overflow-y: auto;
      transition: background-color 0.3s, color 0.3s;
    }

    .sidebar h5 {
      position: fixed;
      top: 0;
      width: 250px;
      background: #fff;
      border-bottom: 1px solid #ddd;
      padding: 15px 20px;
      z-index: 1;
      font-weight: 600;
      font-size: 1rem;
      text-align: center;
      transition: background-color 0.3s;
    }

    body.dark-mode .sidebar,
    body.dark-mode .sidebar h5 {
      background-color: #1e1e1e;
      color: #fff;
      border-color: #444;
    }

    .sidebar .nav-link {
      color: #333;
      font-weight: 500;
      padding: 10px 20px;
      display: flex;
      align-items: center;
      transition: background-color 0.3s, color 0.3s;
    }

    .sidebar .nav-link:hover,
    .sidebar .nav-link.active {
      background-color: #f0f0f0;
      border-left: 4px solid #5dade2;
    }

    body.dark-mode .sidebar .nav-link {
      color: #ddd;
    }

    body.dark-mode .sidebar .nav-link:hover,
    body.dark-mode .sidebar .nav-link.active {
      background-color: #2a2a2a;
      border-left-color: #5dade2;
    }

    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 0;
    }

    .dropdown-toggle::after {
      margin-left: 0.5rem;
    }

    .card-box {
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 20px;
      background-color: #ffffff;
      color: #333;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      transition: background-color 0.3s, color 0.3s;
    }

    body.dark-mode .card-box {
      background-color: #1f1f1f;
      color: #e0e0e0;
      box-shadow: 0 2px 6px rgba(255,255,255,0.05);
    }

    .collapse {
      transition: max-height 0.3s ease;
    }

    .dark-toggle {
      cursor: pointer;
      border: none;
      background: none;
      font-size: 1.3rem;
      color: #333;
    }

    body.dark-mode .dark-toggle {
      color: #f1f1f1;
    }

    @media (max-width: 768px) {
      .sidebar {
        width: 100%;
        position: relative;
        height: auto;
      }

      .layout-wrapper {
        margin-left: 0;
      }

      .sidebar h5 {
        width: 100%;
        position: relative;
      }
    }
  </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
  <h5>🧑‍🏫 Mutaqqien Edu System</h5>
  <ul class="nav flex-column accordion" id="accordionSidebar">
    <!-- Menu -->
    <li class="text-muted small px-3 mt-3">Menu</li>
    <li><a href="#" class="nav-link active"><i class="fas fa-home me-2"></i> Dashboard</a></li>

    <!-- User -->
    <li class="text-muted small px-3 mt-3">User</li>
    <li><a href="#" class="nav-link"><i class="fas fa-user-shield me-2"></i> Admin</a></li>
    <li><a href="#" class="nav-link"><i class="fas fa-users-cog me-2"></i> Operator</a></li>

    <!-- Data -->
    <li class="text-muted small px-3 mt-3">Data</li>

    <!-- Dropdown Santri -->
    <li class="nav-item">
      <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#santriMenu">
        <span><i class="fas fa-children me-2"></i>Data Santri</span><i class="fas fa-angle-down"></i>
      </a>
      <div class="collapse ms-4" id="santriMenu" data-bs-parent="#accordionSidebar">
        <ul class="nav flex-column">
          <li><a class="nav-link" href="#">Data RA</a></li>
          <li><a class="nav-link" href="#">Data MI</a></li>
          <li><a class="nav-link" href="#">Data MTs</a></li>
          <li><a class="nav-link" href="#">Data SMP</a></li>
          <li><a class="nav-link" href="#">Data MA</a></li>
        </ul>
      </div>
    </li>

    <!-- Dropdown Wali -->
    <li class="nav-item">
      <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#menuWali">
        <span><i class="fas fa-users me-2"></i>Data Wali</span><i class="fas fa-angle-down"></i>
      </a>
      <div class="collapse ms-4" id="menuWali" data-bs-parent="#accordionSidebar">
        <ul class="nav flex-column">
          <li><a class="nav-link" href="#">Wali RA</a></li>
          <li><a class="nav-link" href="#">Wali MI</a></li>
          <li><a class="nav-link" href="#">Wali MTs</a></li>
          <li><a class="nav-link" href="#">Wali SMP</a></li>
          <li><a class="nav-link" href="#">Wali MA</a></li>
        </ul>
      </div>
    </li>

    <!-- Dropdown Alumni -->
    <li class="nav-item">
      <a class="nav-link d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#menuAlumni">
        <span><i class="fas fa-user-graduate me-2"></i>Data Alumni</span><i class="fas fa-angle-down"></i>
      </a>
      <div class="collapse ms-4" id="menuAlumni" data-bs-parent="#accordionSidebar">
        <ul class="nav flex-column">
          <li><a class="nav-link" href="#">Alumni RA</a></li>
          <li><a class="nav-link" href="#">Alumni MI</a></li>
          <li><a class="nav-link" href="#">Alumni MTs</a></li>
          <li><a class="nav-link" href="#">Alumni SMP</a></li>
          <li><a class="nav-link" href="#">Alumni MA</a></li>
        </ul>
      </div>
    </li>

    <!-- Data Unit -->
    <li><a href="#" class="nav-link"><i class="fas fa-building me-2"></i> Data Unit</a></li>

    <!-- Control -->
    <li class="text-muted small px-3 mt-3">Control</li>
    <li><a href="#" class="nav-link"><i class="fas fa-clipboard-list me-2"></i> Logs Aktivitas</a></li>
  </ul>
</div>

<!-- Main layout -->
<div class="layout-wrapper">
  <div class="main-content">
    <div class="topbar">
      <h4>Selamat Datang Admin!</h4>
      <div class="d-flex align-items-center gap-3">
        <button class="dark-toggle" id="darkToggle" title="Toggle Dark Mode">
          <i class="fas fa-moon"></i>
        </button>
        <div class="dropdown">
          <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user-circle fa-lg me-2"></i> <span>Admin</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Pengaturan</a></li>
            <li>
              <form action="<?php echo e(route('logout')); ?>" method="POST" class="d-inline">
                <?php echo csrf_field(); ?>
                <button type="submit" class="dropdown-item text-danger">
                  <i class="fas fa-sign-out-alt me-2"></i>Logout
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <footer>
    Directed by <strong>Staff IT PP Dempo Darul Mutaqqien</strong>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const toggleBtn = document.getElementById('darkToggle');
  toggleBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');
  });
</script>
</body>
</html>
<?php /**PATH D:\laravel-project\mutaqqien-edu-system\resources\views/layouts/app.blade.php ENDPATH**/ ?>