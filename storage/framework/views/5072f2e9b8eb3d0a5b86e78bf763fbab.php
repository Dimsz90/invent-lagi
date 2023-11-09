<?php $__env->startSection('content'); ?>

    <div class="container">
        <a href="<?php echo e(route('product.create')); ?>" class="btn btn-primary mb-3">Buat product Baru</a>
    <table class="table table-striped">
        <thead>
            <tr>
               <th>Part Number</th>
               <th>Category</th>
               <th>Brand</th>
               <th>Uom</th>
               <th>currency</th>
               <th>Price</th>
               <th>image</th>
               <th>remarks</th>
               <th>deskripsi</th>
               <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
        <td><?php echo e($item->Part_number); ?></td>
        <td><?php echo e($item->Category_id); ?></td>
        <td><?php echo e($item->Brand_id); ?></td>
        <td><?php echo e($item->Uom_id); ?></td>
        <td><?php echo e($item->currency); ?></td>
        <td><?php echo e(number_format($item->price, 0, ',', '.')); ?></td>
        
        <td>
            <?php if($item->image && Storage::exists($item->image)): ?>
                <img src="<?php echo e(Storage::url($item->image)); ?>" alt="<?php echo e($item->Part_number); ?>">
            <?php else: ?>
                <p>GAMBAR GA ADA !!!</p>
            <?php endif; ?> 
        </td>
        <td><?php echo e($item->remarks); ?>

        <td><?php echo e($item->Description); ?></td>
        <td>
            <a href="<?php echo e(route('product.edit', $item->id)); ?>" class="btn btn-warning btn-sm">Edit</a>

            <form method="POST" action="<?php echo e(route('product.destroy', $item->id)); ?>" style="display:inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin dekk?')">Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <tr>
        <td colspan="10">Maaf Data Product belum tersedia</td>
    </tr>
<?php endif; ?>
      
        </tbody>        
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gudang\resources\views/products/index.blade.php ENDPATH**/ ?>