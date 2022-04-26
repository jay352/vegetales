<?php $__env->startSection('content'); ?>

<style>

            .authe{

                text-decoration: none;
                font-weight: bold;
                color: white;
                background-color: darkblue;
                height:40px ;
                width:100px ;
                border-radius: 5px;



            }

.glogin{


    text-decoration: none;
    font-weight: bold;
    color: white;
    height:50px ;
    width:200px ;
    background-color: lightblue;
    margin-top: 10px;
    border-radius: 10px;
 box-shadow: 10px 10px 10px 5px grey;
 margin: auto;


}

.glogin:hover{

height: 70px;

}

.authe:hover

{

    height: 60px;

}


img{

    height: 50px;
    width: 170px;
}

p{

    margin-left: 40px;
    margin-top: 5px;
    font-weight: bold;
}


 
 .carousel{  
   width:100%;  
   margin: auto; 
   margin-top: 150px; 
   overflow: hidden;  
 }  
 .carouselContainer{  
   display: flex;  
 }  
 .slides{  
   width: 100%;  
   height:390px;  
 }  
 .button{  
   position: relative;  
   transition: 0.1s ease-in;  
 }  
 #next{  
   position: absolute;  
   background-color: white;  
   opacity: 0.5;  
   top: 40%;  
   right: 0%;  
   width: 5%;  
   height: 20%;  
   z-index: 5;  
 }  
 #next:hover{  
   opacity: 0.2;  
 }  
 #prev{position: absolute;  
   background-color: white;  
   opacity: 0.5;  
   top: 40%;  
   left: 0%;  
   width: 5%;  
   height: 20%;  
   z-index: 5;  
 }  
 #prev:hover{  
   opacity: 0.2;  
 }  

        </style>

    <!--for product-->
    <style type="text/css">
        .container {
     
     margin-bottom: 50px
 }

 a {
     text-decoration: none !important
 }

 .card-product-list,
 .card-product-grid {
     margin-bottom: 0
 }

 .card {
     position: relative;
     display: -webkit-box;
     display: -ms-flexbox;
     display: flex;
     -webkit-box-orient: vertical;
     -webkit-box-direction: normal;
     -ms-flex-direction: column;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid rgba(0, 0, 0, 0.1);
     border-radius: 0.10rem;
     margin-top: 10px
 }

 .card-product-grid:hover {
     -webkit-box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
     box-shadow: 0 4px 15px rgba(153, 153, 153, 0.3);
     -webkit-transition: .3s;
     transition: .3s
 }

 .card-product-grid .img-wrap {
     border-radius: 0.2rem 0.2rem 0 0;
     height: 220px
 }

 .card .img-wrap {
     overflow: hidden
 }

 .card-lg .img-wrap {
     height: 280px
 }

 .card-product-grid .img-wrap {
     border-radius: 0.2rem 0.2rem 0 0;
     height: 228px;
     padding: 16px
 }

 [class*='card-product'] .img-wrap img {
     height: 100%;
     max-width: 100%;
     width: auto;
     display: inline-block;
     -o-object-fit: cover;
     object-fit: cover
 }

 .img-wrap {
     text-align: center;
     display: block
 }

 .card-product-grid .info-wrap {
     overflow: hidden;
     padding: 18px 20px
 }

 [class*='card-product'] a.title {
     color: #212529;
     display: block
 }

 .rating-stars {
     display: inline-block;
     vertical-align: middle;
     list-style: none;
     margin: 0;
     padding: 0;
     position: relative;
     white-space: nowrap;
     clear: both
 }

 .rating-stars li.stars-active {
     z-index: 2;
     position: absolute;
     top: 0;
     left: 0;
     overflow: hidden
 }

 .rating-stars li {
     display: block;
     text-overflow: clip;
     white-space: nowrap;
     z-index: 1
 }

 .card-product-grid .bottom-wrap {
     padding: 18px;
     border-top: 1px solid #e4e4e4
 }





 .fa {
     color: #FF5722
 }
    </style>
    </head>
    <body>
        
       
    



        </script>-->
 <div class="container">
    <div class="row">
    <?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <a href="<?php echo e(url('/'.$prod->prod_name)); ?>">
            <figure class="card card-product-grid card-lg"> <img  class="img-wrap" src="<?php echo e(asset('storage/images/'.$prod->prod_img)); ?>" style="width: 400px;"></a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-8"> <?php echo e($prod->prod_name); ?> </div>
                        <div class="col-md-4">
                            <div class="rating text-right"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        </div>
                    </div>
                        
                    <div class="price-wrap"> <span class="price h5">Rs.<?php echo e($prod->price); ?>(250g)</span> <br> <small class="text-success"><?php echo e($prod->description); ?></small> </div>
                 </figcaption>
                <div class="bottom-wrap"> <a href="<?php echo e(url('/'.$prod->prod_name)); ?>"> <button  class="btn btn-primary float-right"> Buy now </button></a>
                    

                </div>
            </figure>
            </a>
      
        </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div>

</div>
  <?php $__env->stopSection(); ?>
 

<?php echo $__env->make('layouts.navbar.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\vegetales\resources\views/welcome.blade.php ENDPATH**/ ?>