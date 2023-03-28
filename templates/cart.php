<?php 

  $cart = new cart($db);

  if($_SERVER['REQUEST_METHOD'] === 'POST')
  {
    if(isset($_POST['buy_now']))
    {
      $cart->addToCart();
    }
  }
?>
<div class="cart container-fluid" style="background: #f5f5f5;">
  <h4 class="px-5 py-3">Shopping Cart</h4>
</div>
<div class="container p-4 ">
    <div class="row" id="shopping-cart">
      <div class="col-lg-8 px-3 card py-2"> 
        <?php 
          echo SuccessMsg();
          echo ErrorMsg();
        ?>     
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Purchase Date</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <template v-for="(item, id) in cart">
                  <tr >
                      <td scope="row">{{ id+1}}</td>
                      <td class="row">
                        <div class="col-sm-4 prd-img">
                          <img src="./assets/oleg-laptev-QRKJwE6yfJo-unsplash.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-sm-8 item-info">
                          <h5>Samsung</h5>
                          <p><small>Size:4GB,Color:Gold</small></p>
                          <p><small>Brand:4GB</small>                  
                        </div>                  
                      </td>
                      <td style="width:10%;">
                        <input type="number" name="" id="item1" min="1" class="form-control">
                      </td>
                      <td class="price-info">
                        <h5>$500</h5>
                        <p>$500</p>
                      </td>
                      <td>790</td>
                      <td>
                        <div class="btn-group">
                          <a href="" class="px-2 btn btn-outline-dark"><i class="fa-regular fa-heart"></i></a>
                          <a href="" class="px-2 btn btn-danger">Remove</a>
                        </div>
                      </td>
                  </tr>
                </template>
            
            </tbody>
          </table>          
        </div>
        <div class="d-flex justify-content-between py-2">
            <a href="" class="btn btn-outline-secondary"><span><i class="fa-solid fa-chevron-left"></i></span> Continue Shopping</a>
            <input type="button" value="Proceed To Pay" name="proceed_to_pay" class="btn btn-primary" v-if="!isEmptyCart">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card p-3">
          <p>Have a coupon?</p>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Coupon code" aria-label="Username" aria-describedby="basic-addon1">
            <input class="btn-primary btn" id="basic-addon1" type="submit">
          </div>
        </div>
        <div class="card p-3 my-2 table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="row">Total Price</th>
                <td>$864</td>
              </tr>
              <tr>
                <th scope="row">Discount</th>
                <td>100</td>
              </tr>
              <tr>
                <th scope="row">Total</th>
                <td>764</td>
              </tr>
            </thead>
          </table>
          <div class="d-flex justify-content-center pay-mtd">
            <img src="./assets/mastercard.png" alt=""  class="img-fluid">
            <img src="./assets/Wordmark.png" alt=""  class="img-fluid">
            <img src="./assets/visa.jpg" alt=""  class="img-fluid">
          </div>
        </div>

      </div>
    </div>
</div>