<?php include_once 'header.php'; ?>
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12 separation">
            <h1 align="center"> DELIVERY DETAILS <br><img src="image/Division%20Arrow1.png"></h1>
        </div>
    </div>
</div>
<div class="container delivery-container pt-5 pb-5">
    <div class="row mb-5">

        <!--Left- Delivery Address-->
        <div class="col-12 col-md-6 jb1">
            <h2 style="margin-left:-15px;"> SELECT DELIVERY ADDRESS&nbsp;<i class="fas fa-map-marker-alt"></i></h2>
            <div class="row jumbotron">
                <div class="col-12 col-lg-6 mb-2">
                    <a href="#"><button type="button" class="btn address-btn btn-md">Lorem Ipsum Address</button></a>
                </div>

                <div class="col-12 col-lg-6 mb-2">
                    <a href="#"><button type="button" class="btn address-btn btn-md">Lorem Ipsum Address</button></a>
                </div>

                <div class="col-12 col-lg-6 mb-2">
                    <a href="#"><button type="button" class="btn address-btn btn-md">Lorem Ipsum Address</button></a>
                </div>

                <div class="col-12 col-lg-6 mb-2">
                    <a href="#"><button type="button" class="btn address-btn btn-md">Lorem Ipsum Address</button></a>
                </div>

                <div class="col-12 col-lg-6 mb-2">
                    <a href="#"><button type="button" class="btn address-btn btn-md">Lorem Ipsum Address</button></a>
                </div>

                <div class="col-12 col-lg-6 mb-2">
                    <a href="#"><button type="button" class="btn btn-md payment-btn add-new-address"> + Add new Address</button></a>
                </div>

            </div>
        </div>


        <!--Right- Delivery Specifications-->

        <div class="col-12 col-md-6 jb2">
            <h2> DELIVERY SPECIFICATIONS</h2>
            <div class="jumbotron">
                <p> Standard Delivery</p>
                <p> Delivery Charges: <i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 100/-</p>
                <p class="free-shipping">Free Shipping for orders above <i class="fas fa-rupee-sign rupee-symbol-checkout" style="font-size:10px;"></i> 2000/-</p>
            </div>

            <div class="rwo">
                <div class="col-12">
                    <p>Estimated Delivery Date &#58; October 30, 2018</p>
                    <p style="color:#EF2A24;font-weight: 500px;"> 1 Item</p>
                </div>
            </div>

            <div class="chk-border-bottom mb-3"></div>

            <div class="row">
                <div class="col-12">
                    <table class="table table-borderless chk-payment-table">
                        <tbody>
                            <tr>
                                <td>Order Total</td>
                                <td><i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 750/-</td>
                            </tr>
                            <tr>
                                <td>Delivery</td>
                                <td><i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 100/-</td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr class="chk-border-top mt-2">
                                <td>
                                    <h5>Total Payable</h5>
                                </td>
                                <td>
                                    <h5><i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 850/-</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <a href="#" target="_blank">
                <button type="submit" class="btn btn-lg payment-btn">CONTINUE WITH PAYMENT</button>
            </a>
        </div>
    </div>
</div>


<?php include_once 'footer.php'; ?>