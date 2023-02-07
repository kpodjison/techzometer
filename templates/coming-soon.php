<?php 
 $comming_soon = $product->GetComingSoonProducts();
?>
<section class="container my-5" id="coming-soon">
          <h3 class="ps-3">Coming Soon</h3>
          <div class="owl-carousel owl-theme">
            <?php foreach($comming_soon as $item): ?>
            <div class="item p-2">
             <a href=""> <img src="./assets/tv/redmi-smart-tv-all2.jpg" class="img-fluid" alt=""> </a>
              <div class="row text-center">
                <p class="my-1">Xiaomi smart TV</p>
                <form action="">
                  <input type="hidden" name="">
                  <button type="submit" class="btn btn-primary mx-3">View Details</button>
                </form>
              </div>
            </div> 
            <?php endforeach; ?>
         
          </div>
</section>