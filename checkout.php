<?php include_once 'header.php'; ?>
<div class="container-fluid main-body">
    <div class="container checkout-container">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12 separation mb-2 ">
                    <h1 align="center"> CHECKOUT <br><img src="image/Division%20Arrow1.png"></h1>
                </div>
            </div>
        </div>
        <!-- discount Jumbotron-->
        <div class="row mt-md-4 jumbotron checkout-jumbotron">
            <div class="col-12">
                <p>Get upto <i class="red-text">30% off</i> on your First order. Use promocode: <b class="red-text">Baisanew</b></p>
            </div>
        </div>

        <!-- My Shopping Bag-->
        <div class="row checkout-item-row mb-md-5 pt-md-5 pb-md-5 pb-2 mt-5">
            <div class="col-12 col-md-7 col-lg-8 pr-md-5">
                <h5>My Shopping Bag (1 Item) <i class="text-magenta">Total: <i class="fas fa-rupee-sign rupee-symbol-red"></i> 605/-</i></h5>

                <div class="row mt-3 checkout-item-row-jumbotron">
                    <div class="col-12 col-md-3 pl-0">
                        <img class="img-responsive checkout-item-row-jumbotron-img" src="image/blog/blog-one.jpg" alt="blog">
                    </div>
                    <div class="col-12 col-md-9">
                        <div class="about-us-text">
                            <h6 class="checkout-title pt-3 pb-3"> Women Straight Kurta <p class="chk-product-price"> <i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 490/- </p>
                            </h6>
                            <form>

                                <div class="row">

                                    <div class="col-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <div class="row  pl-3">
                                                <h6><label for="checkout-size pb-2">Size: </label></h6>
                                                <div class="size-dropdown">
                                                    <select>
                                                        <option>S</option>
                                                        <option>M</option>
                                                        <option selected>L</option>
                                                        <option>XL</option>
                                                        <option>XXL</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-6 col-md-6 col-lg-3">
                                        <div class="form-group">
                                            <div class="row pl-3">
                                                <h6><label for="checkout-qty pb-2">Qty: </label></h6>
                                                <div class="qty-dropdown">
                                                    <select>
                                                        <option selected>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>

                            <h6 class="remove-line mt-md-5">
                                <a href="wishlist.php" target="_blank"><i class="red-text"><i class="fas fa-heart wishlist-icon"></i>Add to Wishlist</i></a><a href="#" class="pl-md-2 remove-item"><i class="fas fa-times remove-icon"></i>Remove</a>&nbsp; </h6>
                        </div>
                    </div>
                </div>
            </div>


            <!--right side col-->

            <div class="col-12 col-md-5 col-lg-4 coupons-colm pl-md-4">
                <div class="row">

                    <div class="col-6 col-md-6 mt-3">
                        <h5 class="pt-2">Coupons</h5>
                        <p class="coupon-sub-title">Login to use account linked coupons</p>
                    </div>

                    <div class="col-6 col-md-6 mt-3">
                        <form method="post" action="#">
                            <button class="btn btn-default contact-us-orders-btn coupon-apply-btn mt-md-3 mb-2" type="submit">Apply Coupons </button>
                        </form>
                    </div>
                </div>

                <div class="chk-border-bottom"></div>


                <table class="table table-borderless chk-payment-table">
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="chk-price-details">PRICE DETAILS</td>
                            <td class="chk-price-details"></td>
                        </tr>
                        <tr>
                            <td>Bag Total</td>
                            <td><i class="fas fa-rupee-sign rupee-symbol-checkout" style="font-size: 10px;margin-bottom: 1px;"></i> 490/-</td>
                        </tr>
                        <tr>
                            <td>Bag Discount</td>
                            <td>
                                <i class="red-text">- <i class="fas fa-rupee-sign rupee-symbol-checkout" style="font-size: 10px;margin-bottom: 1px;"></i> 45/-</i>
                            </td>
                        </tr>
                        <tr>
                            <td>Estimated Tax</td>
                            <td><i class="fas fa-rupee-sign rupee-symbol-checkout" style="font-size: 10px;margin-bottom: 1px;"></i> 30/-</td>
                        </tr>
                        <tr>
                            <td>Coupons Discount</td>
                            <td>
                                <i class="red-text">Apply Coupon</i>
                            </td>
                        </tr>
                        <tr>
                            <td>Standard Delivery Charges</td>
                            <td><i class="fas fa-rupee-sign rupee-symbol-checkout" style="font-size: 10px;margin-bottom: 1px;"></i> 100/-</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr class="chk-border-top mt-2">
                            <td>
                                <h5>Order Total</h5>
                            </td>
                            <td>
                                <h5><i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 575/-</h5>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-12 text-right">
                        <form method="post" action="#">
                            <button class="btn btn-default contact-us-orders-btn mb-2" type="submit">Place Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php'; ?>