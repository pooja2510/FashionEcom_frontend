<?php include_once 'header.php'; ?>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12 separation">
            <h1 align="center"> CONTACT US <br><img src="image/Division%20Arrow1.png"></h1>
        </div>
    </div>
</div>
<div class="container-fluid contactus-container">

   
   <!--Top Bar-->
    <div class="container myorder-container my-md-5">
        <div class="row">
            <div class="col-12 contact-us-orders-text text-center">
                <h5><i class="fas fa-shopping-bag"></i> Track, Cancel, Return/Exchange
                    <a href="my-order.php"><button class="btn btn-default contact-us-orders-btn" type="submit">My Orders</button></a>
                </h5>
            </div>
        </div>
    </div>



    <div class="container enquiry-container pb-md-5">
        <div class="row no-gutters">
           <!--Left side col-->
            <div class="col-12 col-md-5">
                <div class="col-12 text-justify col1-left baisa-address">
                    <h5>OFFICE ADDRESS</h5>
                    <p>Baisa Crafts<br>G&#45;3, Devanda Vatika,<br>Opposite SBI ATM,<br>Maharana Pratap Marg,<br>Rangoli Garden, Panchayawala<br>Jaipur(Rajasthan) &#45; 302034<br>India.</p>
                    <a href="https://goo.gl/maps/gPKy4GfFUZH2" target="_blank" class="baisa-location"><i class="fas fa-map-marker-alt"></i> <small>Check location here!</small></a>
                </div>
                <div class="row text-center col2-row no-gutters">
                    <div class="col-12 col-md-6 col2-left">
                        <h5>EMAIL US</h5>
                        <a href="#">
                            <p><i class="fas fa-envelope"></i> baisa@baisacrafts.com</p>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col2-left">
                        <h5>OFFICE TIMINGS</h5>
                        <p>Monday to Saturday<br>10&#58;00 Hrs &#45; 18&#58;00 Hrs IST</p>
                    </div>
                </div>
            </div>
            <div class="col-1 empty-col"></div>
            
            <!--right side col-->
            <div class="col-12 col-md-6">
                <div class="jumbotron jb-form">
                    <h5 class="form-heading">WRITE TO BAISA</h5>
                    <form method="#" class="enquiry-form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first-name" class="form-label">First name</label>
                                <input type="text" id="first-name" class="form-control user-name" name="userfirstname" placeholder="First name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last-name" class="form-label">Last name</label>
                                <input type="text" id="last-name" class="form-control user-name" name="userlastname" placeholder="Last name" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email-address" class="form-label">Email address</label>
                                <input type="email" id="email-address" class="form-control user-email" name="useremailadd" placeholder="Email id" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone-number" class="form-label">Phone number</label>
                                <input type="text" id="phone-number" class="form-control user-name" name="userphonenum" pattern="^\+(?:[0-9] ?){6,25}[0-9]$" placeholder="+XX XXXXXXXXX" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="user-textmessage" class="form-label">Message us</label>
                                <textarea id="user-textmessage" class="form-control" name="message" rows="5" cols="35">Write your message here!</textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="attached-file" class="form-label">Attachments (if any)</label>
                                <input id="attached-file" class="form-control" type="file" name="attachedfile" multiple>
                            </div>
                            <div class="form-group col-md-12 mb-0 text-center mt-4">
                                <button type="submit" class="btn btn-default send-message">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>