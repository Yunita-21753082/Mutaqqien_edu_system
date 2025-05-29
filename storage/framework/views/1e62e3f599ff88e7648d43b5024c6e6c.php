<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - Mutaqqien Edu System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full flex items-center justify-center bg-gradient-to-br from-blue-100 to-indigo-200">

    <div class="max-w-5xl w-full bg-white shadow-xl rounded-xl overflow-hidden grid grid-cols-1 md:grid-cols-2">
        
        <!-- Kiri - Form Login -->
        <div class="p-8 flex flex-col justify-center">
            <div class="flex justify-center mb-6">
                <img src="<?php echo e(asset('images/logo.jpg')); ?>" alt="Logo Pesantren" class="h-20 object-contain" />
            </div>

            <h2 class="text-2xl font-bold text-center text-gray-800 mb-1">Selamat Datang!</h2>
            <p class="text-center text-gray-500 mb-6">Login untuk lanjut ke Mutaqqien Edu System</p>

            <?php if($errors->any()): ?>
                <div class="mb-4 text-red-600 text-sm text-center">
                    <?php echo e($errors->first()); ?>

                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('login.post')); ?>" class="space-y-5">
                <?php echo csrf_field(); ?>

                <div>
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                        placeholder="Masukkan username kamu" autofocus />
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                        placeholder="Masukkan password kamu" />
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition">
                        Masuk
                    </button>
                </div>
            </form>
        </div>

       <!-- Kanan - Ilustrasi dengan background gambar lokal -->
<div class="hidden md:block relative bg-cover bg-center"
     style="background-image: url('<?php echo e(asset('images/bglogin.jpg')); ?>');">
     
    <!-- Overlay semi-transparan dan efek blur -->
    <div class="absolute inset-0 bg-black/40 backdrop-blur-sm"></div>
    
    <!-- Konten di atas background -->
    <div class="h-full flex items-center justify-center p-6 relative z-10">
        <div class="text-white text-center">
            <h3 class="text-3xl font-semibold mb-2 drop-shadow-md">Pondok Pesantren Dempo Darul Mutaqqien</h3>
            <p class="text-indigo-100 drop-shadow-sm">Membangun generasi Qur’ani, berakhlak dan berprestasi.</p>
        </div>
    </div>
</div>


    </div>

</body>
</html>
<?php /**PATH D:\laravel-project\mutaqqien-edu-system\resources\views/auth/login.blade.php ENDPATH**/ ?>