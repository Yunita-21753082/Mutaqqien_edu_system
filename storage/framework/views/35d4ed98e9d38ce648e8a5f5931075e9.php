

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Edit Santri RA</h1>
    <form action="<?php echo e(route('data-ra.update', $santri->id_santri)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" value="<?php echo e($santri->nama); ?>" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="id_wali" class="form-label">Wali</label>
            <select name="id_wali" class="form-control" required>
                <?php $__currentLoopData = $wali; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($w->id); ?>" <?php echo e($santri->id_wali == $w->id ? 'selected' : ''); ?>><?php echo e($w->nama); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\mutaqqien-edu-system\resources\views/data_ra/edit.blade.php ENDPATH**/ ?>