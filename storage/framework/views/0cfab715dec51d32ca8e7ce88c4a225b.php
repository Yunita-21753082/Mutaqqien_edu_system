

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Data Santri RA</h1>
    <a href="<?php echo e(route('data-ra.create')); ?>" class="btn btn-primary mb-3">Tambah Santri RA</a>
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Nama Wali</th>
                <th>NISN</th>
                <th>NIK</th>
                <th>Asal Sekolah</th>
                <th>Alamat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $dataRA; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $santri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                 <td><?php echo e($santri->nama_santri); ?></td>
                <td><?php echo e($santri->id_kelas); ?></td>
                <td><?php echo e($santri->jenis_kelamin); ?></td>
                <td><?php echo e($santri->tempat_lahir); ?></td>
                <td><?php echo e($santri->tanggal_lahir); ?></td>
                <td><?php echo e($santri->id_wali); ?></td>
                <td><?php echo e($santri->nisn); ?></td>
                <td><?php echo e($santri->nik); ?></td>
                <td><?php echo e($santri->asal_sekolah); ?></td>
                <td><?php echo e($santri->alamat); ?></td>
                <td><?php echo e($santri->status); ?></td>
            <td>
                    <a href="<?php echo e(route('data-ra.edit', ['id_santri' => $santri->id_santri])); ?>">Edit</a>
                    <form action="<?php echo e(route('data-ra.destroy', $santri->id_santri)); ?>" method="POST" class="d-inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\mutaqqien-edu-system\resources\views/data_ra/index.blade.php ENDPATH**/ ?>