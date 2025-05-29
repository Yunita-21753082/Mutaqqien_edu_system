<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mutaqqien Edu System</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body class="font-[Poppins] bg-white text-gray-800">

  <!-- Navbar ala Kominfo -->
  <header class="fixed w-full z-50 bg-[#1B2D56] text-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <!-- Logo dan Brand -->
      <div class="flex items-center gap-3">
        <img src="<?php echo e(asset('images/logo.jpg')); ?>" alt="Logo" class="w-12 h-12 object-contain" />
        <span class="text-lg font-bold">Mutaqqien Edu System</span>
      </div>
      <!-- Toggle Menu Button (Mobile) -->
      <div class="md:hidden">
        <button id="menu-toggle" class="focus:outline-none text-white">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
      <!-- Nav Items -->
      <nav id="nav-menu" class="hidden md:flex gap-5 font-medium">
        <a href="#home" class="hover:text-blue-300 transition">Home</a>
        <a href="#profil" class="hover:text-blue-300 transition">Profil</a>
        <a href="#kontak" class="hover:text-blue-300 transition">Kontak</a>
        <a href="/login" class="bg-transparent border border-white px-3 py-1 rounded-full hover:bg-white hover:text-[#1B2D56] transition">Login</a>
      </nav>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-6 pb-4 flex flex-col gap-3 bg-[#1B2D56]">
      <a href="#home" class="hover:text-blue-300 transition">Home</a>
      <a href="#profil" class="hover:text-blue-300 transition">Profil</a>
      <a href="#kontak" class="hover:text-blue-300 transition">Kontak</a>
      <a href="/login" class="bg-transparent border border-white px-3 py-1 rounded-full hover:bg-white hover:text-[#1B2D56] transition text-center">Login</a>
    </div>
  </header>

  <!-- Home Section -->
  <section id="home" class="relative h-screen pt-[4.5rem] flex items-center justify-center text-white">
    <div class="absolute inset-0 bg-cover bg-center blur-sm brightness-75" style="background-image: url('<?php echo e(asset('images/bgbaru.jpg')); ?>'); z-index: 0;"></div>
    <div class="relative z-10 max-w-2xl text-center px-6">
      <h2 class="text-3xl md:text-5xl font-bold mb-4">Selamat Datang</h2>
      <h2 class="text-3xl md:text-5xl font-bold mb-4">Sistem Data Santri</h2>
      <h3 class="text-xl md:text-2xl font-semibold mb-4">Pondok Pesantren Dempo Darul Muttaqien</h3>
      <p class="mb-6 text-sm md:text-lg">Sistem layanan pendidikan dan manajemen pesantren yang modern, efisien, dan ramah pengguna.</p>
      <div class="flex justify-center gap-4">
        <a href="#profil" class="bg-white text-[#1B2D56] px-5 py-2 rounded-full font-semibold hover:bg-blue-300 transition">Lihat Profil</a>
        <a href="#kontak" class="bg-blue-200 text-[#1B2D56] px-5 py-2 rounded-full font-semibold hover:bg-blue-300 transition">Hubungi Kami</a>
      </div>
    </div>
  </section>

  <!-- Profil Section -->
  <section id="profil" class="min-h-screen bg-gray-100 pt-24 px-6 md:px-20 flex items-center">
    <div class="w-full">
      <h2 class="text-3xl text-center font-bold text-[#1B2D56] mb-6">PROFIL</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        <div>
          <h3 class="text-xl font-semibold mb-2">Profil Pesantren</h3>
          <p class="mb-4 text-sm md:text-base">
            Pondok Pesantren Dempo Darul Muttaqien adalah lembaga pendidikan Islam yang berkomitmen untuk membina generasi berakhlak mulia, cerdas, dan berwawasan luas. 
            Dengan lingkungan yang kondusif dan program pendidikan terpadu, kami siap mencetak santri yang unggul di berbagai bidang.
          </p>
        </div>
        <div>
          <h3 class="text-xl font-semibold mb-2">Komitmen Kami</h3>
          <ul class="list-disc pl-5 space-y-1 text-sm md:text-base">
            <li>Menghasilkan santri yang berakhlak mulia</li>
            <li>Menumbuhkan kecerdasan intelektual dan spiritual</li>
            <li>Mendorong kemandirian dan kedisiplinan</li>
            <li>Mewujudkan pesantren yang adaptif dan modern</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Kontak Section -->
  <section id="kontak" class="min-h-screen bg-gray-100 pt-24 px-6 md:px-20 flex items-center">
    <div class="w-full">
      <h2 class="text-3xl text-center font-bold text-[#1B2D56] mb-6">KONTAK</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Info Kontak -->
        <div class="bg-white p-6 rounded-lg shadow-md text-gray-800">
          <p class="mb-3"><span class="font-bold">📍 Lokasi</span><br>JL. DEPATI H. DUAJI PRABU DIPO DEMPO SELATAN KOTA PAGAR ALAM SUMATERA SELATAN</p>
          <p class="mb-3"><span class="font-bold">📧 Email</span><br>
            <a href="mailto:dempomutaqqien@gmail.com" class="text-blue-600 hover:underline">dempomutaqqien@gmail.com</a>
          </p>
          <p class="mb-3"><span class="font-bold">📞 Telepon</span><br>+62 823-7400-0459</p>
          <p><span class="font-bold">🌐 Kunjungi Kami</span><br>
            <a href="#" class="hover:underline mr-2">Facebook</a>
            <a href="#" class="hover:underline mr-2">Instagram</a>
            <a href="#" class="hover:underline">Twitter</a>
          </p>
        </div>

        <!-- Peta -->
        <div class="overflow-hidden rounded-lg shadow-md">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127332.75884748991!2d103.15978901905122!3d-4.04993269828765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e30f6cbf4e0b20d%3A0x6c68167606db5b87!2sPondok%20Pesantren%20Dempo%20Darul%20Muttaqien!5e0!3m2!1sid!2sid!4v1716630666846!5m2!1sid!2sid" 
            width="100%" 
            height="350" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-[#1B2D56] text-white text-center py-5">
    Copy Right By <strong>Ponpes Dempo Darul Muttaqien 2025</strong>
  </footer>

  <!-- Scroll Animation Script -->
  <script>
    const sections = document.querySelectorAll("section, #home-content");
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.remove("opacity-0", "translate-y-10");
          entry.target.classList.add("opacity-100", "translate-y-0");
        }
      });
    }, {
      threshold: 0.1,
    });

    sections.forEach(section => {
      section.classList.add("opacity-0", "translate-y-10", "transition-all", "duration-700", "ease-in-out");
      observer.observe(section);
    });
  </script>

  <!-- Scroll to Top on Refresh -->
  <script>
    window.addEventListener("pageshow", function () {
      window.scrollTo(0, 0);
    });
  </script>

  <!-- Mobile Menu Script -->
  <script>
    const toggleBtn = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    toggleBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a2d2a1b1d6.js" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH D:\laravel-project\mutaqqien-edu-system\resources\views/landing/home.blade.php ENDPATH**/ ?>