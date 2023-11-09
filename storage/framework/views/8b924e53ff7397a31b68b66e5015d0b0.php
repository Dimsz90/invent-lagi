<?php $__env->startSection('content'); ?>

    <div class="container">
        <a href="<?php echo e(route('category.create')); ?>" class="btn btn-primary mb-3">Buat category Baru</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
               <th>Nama</th>
               <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
        <td><?php echo e($item->id); ?></td>
        <td><?php echo e($item->name); ?></td>
        <td>
            <a href="<?php echo e(route('category.edit', $item->id)); ?>" class="btn btn-warning btn-sm">Edit</a>

            <form method="POST" action="<?php echo e(route('category.destroy', $item->id)); ?>" style="display:inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Confirm delete?')">Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <tr>
        <td colspan="2">Maaf Data Brand belum tersedia</td>
    </tr>
<?php endif; ?>
      
        </tbody>        
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gudang\resources\views/categorys/index.blade.php ENDPATH**/ ?>