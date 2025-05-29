

<?php $__env->startSection('content'); ?>
<p>Anda sedang mengakses sistem informasi santri <strong>Mutaqqien Edu System</strong>.</p>

<div class="row mt-4 g-3">
    <div class="col-md-4">
        <div class="card-box bg-light">
            <div>
                <strong>Total Santri</strong>
                <h4>25</h4>
            </div>
            <i class="fas fa-user-graduate text-primary icon"></i>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card-box bg-success-subtle">
            <div>
                <strong>Total Operator</strong>
                <h4>5</h4>
            </div>
            <i class="fas fa-users text-success icon"></i>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card-box bg-warning-subtle">
            <div>
                <strong>Unit Pendidikan</strong>
                <h4>5</h4>
            </div>
            <i class="fas fa-school text-warning icon"></i>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel-project\mutaqqien-edu-system\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>