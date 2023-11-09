<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="">Part Number</label>
            <input type="text" name="Part_number" id="" class="form-control" >
        </div>
        <div class="form-group">
            <label for="">Category</label>
            <select name="Category_id" id="" class="form-control">
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Brand</label>
            <select name="Brand_id" id="" class="form-control">
                <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Uom</label>
            <select name="Uom_id" id="" class="form-control">
                <?php $__currentLoopData = $uom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Move Type</label>
            <select name="Type" id="" class="form-control">
                <option value="Fast">Fast</option>
                <option value="Slow">Slow</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <div class="row">
                <div class="col-md-6">
                    <select name="currency" id="" class="form-control" placeholder="currentcy.....">
                        <option value="rupiah">IDR</option>
                        <option value="dollar amerika">USD</option>
                        <option value="dollar singapura">SGD</option>
                        <option value="euro">EUR</option>
                        <option value="yen">YEN</option>

                    </select>
                </div>
                <div class="col-md-6">
                    <input type="number" name="price" id="" class="form-control" placeholder="price">
                </div>
            </div>

        </div>
        <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Remarks</label>
            <input type="text" name="remarks" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Descriptions</label>
            <input type="text" name="Description" id="" class="form-control">
        </div>
        <div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="<?php echo e(route('category')); ?>" class="btn btn-primary">cancel</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\gudang\resources\views/products/create.blade.php ENDPATH**/ ?>