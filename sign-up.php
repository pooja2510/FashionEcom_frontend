<?php include_once 'header.php'; ?>

<div class="container-fluid bg-img-signup">
    <div class="signup-img-overlay"></div>
    <div class="row justify-content-sm-center mx-0">
        <div class="col-sm-8 col-md-7 col-lg-4 mt-5">
            <div class="card login-card-background login-card">
                <div class="card-body text-center">
                    <h1>SIGN UP</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="post" class="form-signin">
                                <input type="text" id="sign-up-name" class="form-control mb-3" placeholder="Name" required autofocus>
                                <input type="email" id="sign-up-email" class="form-control mb-3" placeholder="Email Id" required autofocus>
                                <input type="text" id="sign-up-mobile" class="form-control mb-3" placeholder="(+91) Phone Number" required autofocus>
                                <input type="password" id="sign-up-password" class="form-control mb-3" placeholder="Create Password" required>
                                <input type="password" id="sign-up-confirm-password" class="form-control mb-3" placeholder="Retype Password" required>
                                <div>
                                    <button type="submit" class="btn login-btn">Submit</button>
                                </div>
                                <div>
                                    <a href="login.php"><button type="button" class="btn login-btn login-signup-link-btn mt-3">Existing User?<span style="color:#EA2A24;"> Login</span> </button></a>
                                </div>
                                <div class="social-button">
                                        <a href="https://www.facebook.com/home.php" target="_blank"><i class="fab fa-facebook login-facebook"></i></a>
                                        <a href="#" target="_blank"><i class="fab fa-google login-google"></i></a>
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