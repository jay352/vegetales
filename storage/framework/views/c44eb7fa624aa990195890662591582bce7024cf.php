
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
      <div class="col-md-7">
	<div class="card">
	
<div class="card-body">
			<h2>Enter Delivery Address</h2>

			<form >
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" required>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" required>
  </div>
  <div class="col-8">
    <label for="inputAddress" class="form-label">Address Line 1</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
  </div>
  
  <div class="col-md-4">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" required>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" required>
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-4">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
			

</div>

		</div>
	</div>

  <div class="col-md-5">
    <div class="card">
      <div class="card-body">
        <h2>Invoice Detail</h2>
      </div>
     </div>
  </div>
 </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vegetales\resources\views/product_buy/checkout.blade.php ENDPATH**/ ?>