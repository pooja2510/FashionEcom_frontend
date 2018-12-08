<?php include_once 'header.php'; ?>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12 separation">
            <h1 align="center"> MY PROFILE <br><img src="image/Division%20Arrow1.png"></h1>
        </div>
    </div>
</div>
<div class="container mt-4 mb-5 pb-5 blog-container">
    <!-- menu -->
    <div class="row mt-1 profile-row">
        <div class="col-8 col-md-4 col-lg-3 mb-2">
            <div class="card my-profile-menu">
                <a href="#">
                    <h5 class="active">Primary Info</h5>
                </a>
                <a href="my-order.php" target="_blank">
                    <h5>My Orders</h5>
                </a>
                <a href="#">
                    <h5>Baisa Wallet</h5>
                </a>
                <a href="wishlist.php" target="_blank">
                    <h5>My Wishlist</h5>
                </a>
                <a href="#">
                    <h5>My Address</h5>
                </a>
                <a href="#">
                    <h5>Track My Order</h5>
                </a>
                <a href="#">
                    <h5 class="border-0">Saved Cards</h5>
                </a>
            </div>
        </div>

        <!-- profile -->
        <div class="col-12 col-md-8 col-lg-9">
            <div class="row my-profile-jumbotron px-md-3 pb-md-2 pt-md-4 m-0">

                <div class="col-12">
                    <h3>Primary Information</h3>
                </div>

                <div class="col-12">
                    <table class="table table-borderless my-profile-table">
                        <tbody>
                            <tr>
                                <td>First Name</td>
                                <td>Pooja</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>Rawat</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>Female</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>---</td>
                            </tr>
                            <tr>
                                <td>Wedding Anniversary</td>
                                <td>---</td>
                            </tr>
                            <tr>
                                <td>Mobile No.</td>
                                <td>96XXXXXXXX</td>
                            </tr>
                            <tr>
                                <td>Location</td>
                                <td>Dehradun</td>
                            </tr>
                            <tr>
                                <td>Email Id</td>
                                <td>pooja.rawat@gmail.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <!-- edit button -->
            <div class="row">
                <div class="col-12 text-center">
                    <button class="btn btn-default contact-us-orders-btn my-profile-edit-btn" type="submit">Edit</button>
                </div>
            </div>

        </div>
    </div>

</div>

<?php include_once 'footer.php'; ?>