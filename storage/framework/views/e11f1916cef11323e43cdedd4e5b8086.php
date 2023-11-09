<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route('brands.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="">Nama Brand</label>
                <input type="text" name="name" id="" class="form-control" required>
            </div>
            <div style="margin-top: 10px">
                <button type="submit" class="btn btn-success"  >Simpan</button>
                <a href="<?php echo e(route('brands')); ?>" class="btn btn-primary">cancel</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gudang\resources\views/brands/create.blade.php ENDPATH**/ ?>