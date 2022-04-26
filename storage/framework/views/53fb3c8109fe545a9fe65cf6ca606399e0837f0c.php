
<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Manage Product')); ?></div>

                <table class="table">
                	<thead>
                	<tr>
                		<th scope="col">Id</th>
                		<th scope="col">Image</th>
                		<th scope="col">Name</th>
                		<th scope="col">Price</th>
                        <th scope="col">Weight</th>
                		<th scope="col">Description
                		</td>
                	</tr>
                	</thead>
	<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<tr>
		<th scope="col"><?php echo e($prod->id); ?></th>
<td><img  src="<?php echo e(asset('storage/images/'.$prod->prod_img)); ?>" alt="" title="" style="height: 200px; width: 200px;"  >
            </td>
            <td><?php echo e($prod->prod_name); ?></td>
            <td><?php echo e($prod->price); ?></td>
             <td><?php echo e($prod->weight); ?></td>
            <td><?php echo e($prod->description); ?></td>
            <td><a  href="<?php echo e(url('edit-pro/'.$prod->id)); ?>" class="btn btn-primary">EDIT</a></td>
            <td><form action="<?php echo e(url('delete-pro/'.$prod->id)); ?>"  method="POST">
            	<?php echo csrf_field(); ?>
            	<?php echo method_field('DELETE'); ?>
            	<button type="submit" class="btn btn-danger">DELETE</button>
            </form> </td>

	</tr>	
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

               
                	</div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vegetales\resources\views/admin/prod-manage.blade.php ENDPATH**/ ?>