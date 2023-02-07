<?php 
  $latest_products = $product->GetLatestProducts();
  $arr_chunk = array_chunk($latest_products,4,true);
?>
<section class="container my-5" id="latest-products">
          <h3>Latest Products</h3>
          <div class="div filters mb-2">
            <button class="btn">All</button>
            <button class="btn">Phones</button>
            <button class="btn">Laptops</button>
            <button class="btn">Bluethooth earbuds</button>
            <button class="btn">Tablets</button>
            <button class="btn">Woofers</button>
            <button class="btn">Tv</button>
          </div>
          <?php foreach($arr_chunk as $chunk):?>
              <div class="row ">
                <?php foreach($chunk as $item):?>
                  <div class="col-lg-3 col-sm-12 mb-2">              
                      <div class="border p-3">
                        <a href="product.html"> <img src="./assets/<?php echo htmlentities($item['image'])?>" class="img-fluid" alt=""> </a>
                    
                        <div class="row text-center">
                          <p class="my-1"><?php echo htmlentities($item['product_name'])?></p>
                        <p class="my-1 text-warning">
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star"></i>
                          <i class="fa-solid fa-star-half-stroke"></i>
                        </p>
                        <small class="my-1">GHC <?php echo htmlentities($item['product_price'])?></small>
                        <form action="product.html">
                          <input type="hidden" name="">
                          <button type="submit" class="btn btn-warning mx-3">View Product</button>
                        </form>
                        </div>
                      </div>
                  </div>
                <?php endforeach;?>
                         
              </div>
          <?php endforeach; ?>
</section>