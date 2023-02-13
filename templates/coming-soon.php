<?php 
 $comming_soon = $product->GetComingSoonProducts();
?>
<section class="container my-5" id="coming-soon">
          <h3 class="ps-3">Coming Soon</h3>
          <div class="owl-carousel owl-theme">
            <?php foreach($comming_soon as $item): ?>
              <div class="item p-2">
                <img src="./assets/<?php echo htmlentities($item['image'])?>" class="img-fluid" alt=""> 
                <div class="row text-center">
                  <p class="my-1"><?php echo htmlentities($item['product_name']) ?></p>
                  <form action="product.php" method="POST">
                    <input type="hidden" name="pid" value="<?php echo htmlentities($item['product_id'])?>">
                    <button type="submit" class="btn btn-primary mx-3" name="coming-soon">View Details</button>
                  </form>
                </div>
              </div> 
            <?php endforeach; ?>
         
          </div>
</section>