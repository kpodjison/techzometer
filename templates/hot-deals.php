<section class="container my-5" id="hot-deals">
          <h3 class="ps-3">Hot Deals</h3>
          <div class="owl-carousel owl-theme">
            <?php foreach($hot_deals as $item):?>
              <div class="item p-2">
                <img src="./assets/<?php echo htmlentities($item['image']); ?>" class="img-fluid" alt="">
                <div class="row text-center">
                  <p class="my-1"><?php echo htmlentities($item['product_name']); ?></p>
                  <p class="my-1 text-warning">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                  </p>
                  <small class="my-1"><del>GHC <?php echo htmlentities($item['product_price']); ?> </del> </small>
                  <small class="my-1">GHC <?php echo htmlentities($item['discount_price']); ?></small>
                  <form action="product.php" method="POST">
                    <input type="hidden" name="pid" value="<?php echo htmlentities($item['product_id'])?>">
                    <button type="submit" class="btn btn-warning mx-3" name="hot-deals">Add To Card</button>
                  </form>
                </div>
              </div>  
            <?php endforeach; ?>
              
          </div>
</section>