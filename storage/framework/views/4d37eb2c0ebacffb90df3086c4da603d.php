<?php $__env->startSection('content'); ?>
    <div class="container">
        <form action="<?php echo e(route('product.update', $product->id)); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
           
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" name="price" id="" value="<?php echo e($product->price); ?>" class="form-control" >
            </div>
            <div class="form-group">
                <label for="">Part Number</label>
                <input type="text" name="Part_number" id="" value="<?php echo e($product->Part_number); ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" name="Description" id="" value="<?php echo e($product->Description); ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Category ID</label>
                <input type="number" name="Category_id" id="" value="<?php echo e($product->Category_id); ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="">Brand ID</label>
                <input type="number" name="Brand_id" id="" value="<?php echo e($product->Brand_id); ?>" class="form-control" readonly >
            </div>
            <div class="form-group">
                <label for="">UOM ID</label>
                <input type="number" name="Uom_id" id="" value="<?php echo e($product->Uom_id); ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Remarks</label>
                <input type="text" name="remarks" id="" value="<?php echo e($product->remarks); ?>" class="form-control">
            </div>

            <div style="margin-top: 10px">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="<?php echo e(route('product')); ?>" class="btn btn-primary">cancel</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gudang\resources\views/products/edit.blade.php ENDPATH**/ ?>