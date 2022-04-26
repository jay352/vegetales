
<?php $__env->startSection('content'); ?>
<script type="text/javascript">

function inc(){
    var c = parseInt(document.getElementsByName("qua")[0].value);
            var p =document.querySelector("#pri").innerHTML;
            p = parseInt(p);
            c++;

    document.getElementsByName("qua")[0].value = c;

var total = parseInt(total);
 total = c * p;
   document.getElementById("total").innerHTML = total;      
  





}
function dec(){
    var c = parseInt(document.getElementsByName("qua")[0].value);
 var p =document.querySelector("#pri").innerHTML;
 var total = document.querySelector("#total").innerHTML
        
       c--;
        if(c<1)
        {
            alert("Quantity must be atleast 1");
           
 

        }
        else{
        document.getElementsByName("qua")[0].value = c;
   total = parseInt(total);
 total = total-p; 
   document.getElementById("total").innerHTML = total;      
  

    
}
}



</script>
<div class="container" style=" margin-right: 50px; margin-left: 50px;">
    <div class="card shadow">
        <div class="card-body">
          
            <div class="row">
        <div class="col-md-4 border-right">
             
            <img class="img-wrap" src="<?php echo e(asset('storage/images/'.$product->prod_img)); ?>"  alt="Card image cap" style="height: 30rem;width: 25rem; border-radius: 50px;" >
        </div>
        <div class="col-md-4">
            
                <p style="font-size: 4.5rem; font-weight: bold;"><?php echo e($product->prod_name); ?></p>
            
            <p><b style="font-size: 3rem;" id="weight"><?php echo e($product->weight); ?>g</b></p>
              
                <label for="quantity">Select Quantity</label>

                <div class="input-group text-center mb-3" style="width: 500px;">
                    <input type="button" name="decrement" onclick="dec()" value="-"/>
                    <input type="text" name="qua"  id="quantity" class="font-control qty-input text-center" onchange="qun()" value=<?php echo e($product->quantity); ?> >
                   <input type="button" name="increment" onclick="inc()" value="+"/>
                </div>
                <table style="font-size: 2rem;">
                    <tr>
                        <td>Price =</td>
                        <td id="pri"><?php echo e($product->price); ?></td>
                    </tr>
                    <tr>
                        <td>Total=</td>
                        <td id="total"></td>
                    </tr>
                </table>

<div>
      <p ></p>
</div>
  <a href="<?php echo e(url($product->prod_name.'/checkout')); ?>" class="btn btn-primary" style="width:px;">Buy Now <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
</svg></a>
 

  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
                <div class="card-footer">
                <center>
  <h2 style="color: Green; font-family: fantasy;">Vegetable Description</h2>
  <p><?php echo e($product->description); ?></p>
</center>
</div>
</div>
</div>
</div>
  </div>



  

</div>
        </div>
    


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vegetales\resources\views/product_buy/confirmation.blade.php ENDPATH**/ ?>