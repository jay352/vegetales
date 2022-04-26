

<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Edit Product')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>


                    

                   <form action="<?php echo e(url('update-pro/'.$product->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
<div class="form-group">
     <label for="pro_name">Product-name:</label>
     <input type="text" class="form-control"  name="pro_name" value="<?php echo e($product->prod_name); ?>">
</div>
<div class="form-group">
     <label for="imge">Upload-image:</label>
     <input type="file" class="form-control-file" name="imge" >
     <img  src="<?php echo e(asset('storage/images/'.$product->prod_img)); ?>" alt="" title="" style="height: 200px; width: 200px;"  >
 </div>
<div class="form-group">
     <label for="price">Price:</label>
     <input type="number" class="form-control" name="price" value="<?php echo e($product->price); ?>">
 </div>
 <div class="form-group">
     <label for="price">Weight:</label>
     <input type="number" class="form-control" name="weight" value="<?php echo e($product->weight); ?>">
 </div>
    <div class="form-group">               
    <label for="des"> Description:</label>
    <textarea class="form-control"  cols="5" rows="5" name="des"><?php echo e($product->description); ?></textarea>
</div>
    <input type="submit" class="btn btn-primary" value="Update">

                       
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vegetales\resources\views/admin/edit.blade.php ENDPATH**/ ?>