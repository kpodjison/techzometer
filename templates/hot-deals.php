<section class="container my-5" id="hot-deals">
          <h3 class="ps-3">Hot Deals</h3>
          <div class="owl-carousel owl-theme">
              <template v-for="(item,id) in hotDeals" :key="id++">
                <div class="item p-2">
                  <img :src="getImage('./assets/'+item.image)" class="img-fluid" alt="">
                  <div class="row text-center">
                    <p class="my-1">{{item.product_name}}</p>
                    <p class="my-1 text-warning">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star-half-stroke"></i>
                    </p>
                    <small class="my-1"><del>GHC {{item.product_price}} </del> </small>
                    <small class="my-1">GHC {{item.discount_price}}</small>
                    <form action="cart.php" method="POST">
                      <input type="hidden" name="pid" value="{{item.product_id}}">
                      <button type="submit" class="btn btn-warning mx-3" name="hot-deals">Add To Cart</button>
                    </form>
                  </div>
                </div>  
              </template>
          </div>
</section>