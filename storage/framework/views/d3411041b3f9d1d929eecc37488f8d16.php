

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Tambah Santri RA</h1>
    <form action="<?php echo e(route('data-ra.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_wali" class="form-label">Wali</label>
            <select name="id_wali" class="form-control" required>
                <?php $__currentLoopData = $wali; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($w->id); ?>"><?php echo e($w->nama); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\mutaqqien-edu-system\resources\views/data_ra/create.blade.php ENDPATH**/ ?>