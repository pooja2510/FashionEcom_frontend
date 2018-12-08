<?php include_once 'header.php';?>
<div class="container-fluid bg-img-login">
    <div class="login-img-overlay"></div>
    <div class="row justify-content-sm-center mx-0">
        <div class="col-sm-8 col-md-7 col-lg-4 column-card">
            <div class="card login-card-background login-card">
                <div class="card-body text-center">
                    <h1>LOGIN</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post" class="form-signin">
                                <input type="text" id="login-email" class="form-control mb-3 user-login-email" placeholder="Email" required autofocus>
                                <input type="password" id="login-password" class="form-control mb-3 user-login-password" placeholder="Password" required>

                                <div class="row mb-2">

                                    <div class="col-12 col-md-6 login-checkbox-row">
                                        <div class="form-check col-12">
                                            <label class="filter-label" for="login-checkbox" style="padding-top: 5px; text-align: left;">Remember me
                                                <input type="checkbox" class="form-check-input custom-checkbox" id="login-checkbox">
                                                <span class="tic"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 login-forgot-password">
                                        <a href="#" target="_blank">Forgot password?</a>
                                    </div>
                                </div>

                                <div>
                                    <button type="submit" class="btn login-btn">Submit</button>
                                </div>
                                <a href="sign-up.php" target="_blank"><button type="button" class="btn login-btn login-signup-link-btn mt-3">New To Baisa? <span style="color:#EA2A24;">Sign Up</span></button></a>

                                <div class="baisa-social-linkbtn">
                                    <p style="position:relative;top:30px;color:#0000008a;font-size:0.8rem;font-weight: 600;letter-spacing:1px;"> LOGIN WITH </p>
                                    <div class="social-button">
                                        <a href="https://www.facebook.com/home.php" target="_blank"><i class="fab fa-facebook login-facebook"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-google login-google"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--col-md-12-->
                    </div>
                    <!--row-->
                </div>
                <!--card-body-->
            </div>
            <!--Card-->
        </div>
        <!--Col-sm-10 col-md-5-->
    </div>
    <!--Row-->
</div>
<!--Container-->
<?php include_once 'footer.php'; ?>