<?php include_once 'header.php'; ?>

<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12 separation">
            <h1 align="center"> WOMEN'S WEAR <br><img src="image/Division%20Arrow1.png"></h1>
        </div>
    </div>
</div>

<!-- path -->
<div class="container mt-3">
    <div class="row path-row mb-3">
        <div class="col-12 col-md-6">
            <p>
                <a href="home.php" target="_blank" class="breadcrumb-link">Home <i class="fas fa-chevron-right"></i></a>
                <a href="#" target="_blank" class="breadcrumb-link">Clothing <i class="fas fa-chevron-right"></i></a>
                <a href="home.php" target="_blank" class="breadcrumb-link">Women <i class="fas fa-chevron-right"></i></a>
                <b style="color: #0000008a; font-weight: 500;">Suit Sets</b>
            </p>
        </div>
        <div class="col-12 col-md-6 text-right">
            <h6 style="display:inline-block;color:#0000008a;"><label for="checkout-size pb-2">Sort by: </label></h6>
            <div class="filter-dropdown" style="display:inline-block;">
                <select>
                    <option selected>Popularity</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low </option>
                    <option>New Arrivals</option>
                </select>
            </div>
        </div>
    </div>

    <div class="col-12 section-page-heading mb-3">
        <h3>Suit Sets</h3>
    </div>

    <div class="row">
        <!-- left side -->
        <div class="col-12 col-md-3 filter-colm-border">

            <form method="post" action="#" class="filter-form-border">


                <!-- categories -->
                <h5 class="filter-title mt-5">Categories</h5>

                <div class="col-12 col-lg-9 categories-scrollbar">
                    <div class="form-check col-12">
                        <label class="filter-label" for="ww-maxidress">Maxi Dresses
                            <input type="checkbox" class="form-check-input custom-checkbox" id="ww-maxidress">
                            <span class="tic"></span>
                        </label>
                    </div>

                    <div class="form-check col-12">
                        <label class="filter-label" for="ww-lehengas">Lehengas &amp; Shararas
                            <input type="checkbox" class="form-check-input custom-checkbox" id="ww-lehengas">
                            <span class="tic"></span>
                        </label>
                    </div>

                    <div class="form-check col-12">
                        <label class="filter-label" for="ww-patialaset">Patiala Sets
                            <input type="checkbox" class="form-check-input custom-checkbox" id="ww-patialaset">
                            <span class="tic"></span>
                        </label>
                    </div>
                    <div class="form-check col-12">
                        <label class="filter-label" for="ww-palazzoset">Palazzo Sets
                            <input type="checkbox" class="form-check-input custom-checkbox" id="ww-palazzoset">
                            <span class="tic"></span>
                        </label>
                    </div>

                    <div class="form-check col-12">
                        <label class="filter-label" for="ww-sarees">Sarees
                            <input type="checkbox" class="form-check-input custom-checkbox" id="ww-sarees">
                            <span class="tic"></span>
                        </label>
                    </div>

                    <div class="form-check col-12">
                        <label class="filter-label" for="ww-dupattas">Dupattas
                            <input type="checkbox" class="form-check-input custom-checkbox" id="ww-dupattas">
                            <span class="tic"></span>
                        </label>
                    </div>
                    <div class="form-check col-12">
                        <label class="filter-label" for="ww-dresses">Dresses
                            <input type="checkbox" class="form-check-input custom-checkbox" id="ww-dresses">
                            <span class="tic"></span>
                        </label>
                    </div>
                    <div class="form-check col-12">
                        <label class="filter-label" for="ww-ethnictop">Ethnic Tops
                            <input type="checkbox" class="form-check-input custom-checkbox" id="ww-ethnictop">
                            <span class="tic"></span>
                        </label>
                    </div>
                    <div class="form-check col-12">
                        <label class="filter-label" for="ww-ethnicbottom">Ethnic Bottoms
                            <input type="checkbox" class="form-check-input custom-checkbox" id="ww-ethnicbottom">
                            <span class="tic"></span>
                        </label>
                    </div>
                </div>

                <!-- brands -->
                <h5 class="filter-title mt-4">Collections</h5>

                <div class="form-check col-12">
                    <label class="filter-label" for="ww-levi">Lorem ipsum
                        <input type="checkbox" class="form-check-input custom-checkbox" id="ww-levi">
                        <span class="tic"></span>
                    </label>
                </div>

                <div class="form-check col-12">
                    <label class="filter-label" for="ww-vanhusen">Lorem ipsum
                        <input type="checkbox" class="form-check-input custom-checkbox" id="ww-vanhusen">
                        <span class="tic"></span>
                    </label>
                </div>

                <div class="form-check col-12">
                    <label class="filter-label" for="ww-pepe-jeans">Lorem ipsum
                        <input type="checkbox" class="form-check-input custom-checkbox" id="ww-pepe-jeans">
                        <span class="tic"></span>
                    </label>
                </div>

                <div class="form-check col-12">
                    <label class="filter-label" for="ww-wrangler">Lorem ipsum
                        <input type="checkbox" class="form-check-input custom-checkbox" id="ww-wrangler">
                        <span class="tic"></span>
                    </label>
                </div>

                <!-- price -->
                <h5 class="filter-title mt-4">Price (INR)</h5>

                <div class="form-check col-12">
                    <label class="filter-label" for="ww-price-not-selected">0 - 599
                        <input type="checkbox" class="form-check-input custom-checkbox" id="ww-price-not-selected">
                        <span class="tic"></span>
                    </label>
                </div>

                <div class="form-check col-12">
                    <label class="filter-label" for="ww-price-selected">599 - 999
                        <input type="checkbox" class="form-check-input custom-checkbox" id="ww-price-selected">
                        <span class="tic"></span>
                    </label>
                </div>

                <div class="form-check col-12">
                    <label class="filter-label" for="ww-price-indeterminate">999 - 1499
                        <input type="checkbox" class="form-check-input custom-checkbox" id="ww-price-indeterminate">
                        <span class="tic"></span>
                    </label>
                </div>

                <div class="form-check col-12">
                    <label class="filter-label" for="ww-price-disabled">1499 - 2199
                        <input type="checkbox" class="form-check-input custom-checkbox" id="ww-price-disabled">
                        <span class="tic"></span>
                    </label>
                </div>

                <div class="form-check col-12">
                    <label class="filter-label" for="ww-price-disabled-selected">2199 - 3399
                        <input type="checkbox" class="form-check-input custom-checkbox" id="ww-price-disabled-selected">
                        <span class="tic"></span>
                    </label>
                </div>
                <div class="form-check col-12">
                    <label class="filter-label" for="ww-price-disabled-notselected">3399 - 4999
                        <input type="checkbox" class="form-check-input custom-checkbox" id="ww-price-disabled-notselected">
                        <span class="tic"></span>
                    </label>
                </div>
                <div class="form-check col-12">
                    <label class="filter-label" for="ww-price-notdisabled-selected">Above 4999
                        <input type="checkbox" class="form-check-input custom-checkbox" id="ww-price-notdisabled-selected">
                        <span class="tic"></span>
                    </label>
                </div>
            </form>
        </div>
        
        <!--Multi select dropdown-Mobile view-->
        <div class="col-12 multiselect-dropdown-filter mt-3">
            Categories : <select id="categories" multiple="multiple">
                <option value="Maxi Dresses">Maxi Dresses</option>
                <option value="Lehengas-Shararas">Lehengas &amp; Shararas</option>
                <option value="Patiala-Sets">Patiala Sets</option>
                <option value="Palazzo-Sets">Palazzo Sets</option>
                <option value="Sarees">Sarees</option>
                <option value="Dupattas">Dupattas</option>
                <option value="Dresses">Dresses</option>
                <option value="Ethnic-Top">Ethnic Top</option>
                <option value="Ethnic-Bottom">Ethnic Bottom</option>
            </select>
        </div>
        <div class="col-12 multiselect-dropdown-filter mt-3">
            Collections : <select id="collections" multiple="multiple">
                <option value="Lorem ipsum">Lorem ipsum</option>
                <option value="Lorem ipsum">Lorem ipsum</option>
                <option value="Lorem ipsum">Lorem ipsum</option>
                <option value="Lorem ipsum">Lorem ipsum</option>
                <option value="Lorem ipsum">Lorem ipsum</option>
                <option value="Lorem ipsum">Lorem ipsum</option>
            </select>
        </div>
        <div class="col-12 multiselect-dropdown-filter mt-3">
            Price : <select id="price" multiple="multiple">
                <option value="cheese">0-599</option>
                <option value="tomatoes">599-999</option>
                <option value="mozarella">999-1499</option>
                <option value="mushrooms">1499-2199</option>
                <option value="pepperoni">2199-3399</option>
                <option value="onions">3399-4999</option>
                <option value="onions">Above 4999</option>
            </select>
        </div>
 <!--Multi select dropdown-Mobile view End here-->
       
       
       
        <!-- right side -->
        <div class="col-12 col-md-9 section-right-side-scrollbar">

            <!-- images -->
            <div class="row scrollbar-inner">

                <!-- card one -->
                <div class="col-6 col-md-4 main-content2">
                    <a href="#" style="text-decoration: none;">
                        <div class="section-card">
                            <img class="section-card-img no-price-off-label" src="image/section/8.jpeg" alt="womes's wear">

                            <div class="baisa-offer-caption">
                                <p class="mb-1">Baisa blue and white printed kurti with pants</p>
                                <h5 class="mb-0"><i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 5000/-</h5>
                            </div>
                            <div class="text-center section-addtobag-div">
                                <button type="submit" class="btn btn-default contact-us-orders-btn section-addtobag">Add to Bag</button>
                            </div>
                        </div>
                    </a>
                    <i class="far fa-heart wishlist-heart"></i>
                    <i class="fas fa-heart wishlist-heart2"></i>
                </div>

                <!-- card two -->
                <div class="col-6 col-md-4 main-content2">
                    <a href="#" style="text-decoration: none;">
                        <div class="section-card">
                            <img class="section-card-img no-price-off-label" src="image/section/2.jpg" alt="womes's wear">
                            <div class="baisa-offer-caption">
                                <p class="mb-1">Baisa blue and white printed kurti with pants</p>
                                <h5 class="mb-0"><i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 5000/-</h5>
                            </div>
                            <div class="text-center section-addtobag-div">
                                <button type="submit" class="btn btn-default contact-us-orders-btn section-addtobag">Add to Bag</button>
                            </div>
                        </div>
                    </a>
                    <i class="far fa-heart wishlist-heart"></i>
                    <i class="fas fa-heart wishlist-heart2"></i>
                </div>

                <!-- card three -->
                <div class="col-6 col-md-4 main-content2">
                    <a href="#" style="text-decoration: none;">
                        <div class="section-card">
                            <img class="section-card-img no-price-off-label" src="image/section/3.jpg" alt="womes's wear">
                            <div class="baisa-offer-caption">
                                <p class="mb-1">Baisa blue and white printed kurti with pants</p>
                                <h5 class="mb-0"><i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 5000/-</h5>
                            </div>
                            <div class="text-center section-addtobag-div">
                                <button type="submit" class="btn btn-default contact-us-orders-btn section-addtobag">Add to Bag</button>
                            </div>
                        </div>
                    </a>
                    <i class="far fa-heart wishlist-heart"></i>
                    <i class="fas fa-heart wishlist-heart2"></i>
                </div>

                <!-- card four -->
                <div class="col-6 col-md-4 main-content2">

                    <div class="section-card">
                        <a href="#" style="text-decoration: none;">
                            <img class="section-card-img" src="image/section/6.jpg" alt="womes's wear">
                            <div class="baisa-offer-caption">
                                <p class="mb-1">Baisa blue and white printed kurti with pants</p>
                                <h5 class="mb-0"><i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 5000/-</h5>
                            </div>
                            <div class="text-center section-addtobag-div">
                                <button type="submit" class="btn btn-default contact-us-orders-btn section-addtobag">Add to Bag</button>
                            </div>
                        </a>
                        <i class="far fa-heart wishlist-heart"></i>
                        <i class="fas fa-heart wishlist-heart2"></i>
                    </div>
                </div>

                <!-- card five -->
                <div class="col-6 col-md-4 main-content2">
                    <a href="#" style="text-decoration: none;">
                        <div class="section-card">
                            <img class="section-card-img no-price-off-label" src="image/section/7.jpg" alt="womes's wear">
                            <div class="baisa-offer-caption">
                                <p class="mb-1">Baisa blue and white printed kurti with pants</p>
                                <h5 class="mb-0"><i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 5000/-</h5>
                            </div>
                            <div class="text-center section-addtobag-div add-to-bag">
                                <button type="submit" class="btn btn-default contact-us-orders-btn section-addtobag">Add to Bag</button>
                            </div>
                        </div>
                    </a>
                    <i class="far fa-heart wishlist-heart"></i>
                    <i class="fas fa-heart wishlist-heart2"></i>
                </div>

                <!-- card six -->
                <div class="col-6 col-md-4 main-content2">
                    <a href="#" style="text-decoration: none;">
                        <div class="section-card">
                            <img class="section-card-img no-price-off-label" src="image/section/8.jpeg" alt="womes's wear">
                            <div class="baisa-offer-caption">
                                <p class="mb-1">Baisa blue and white printed kurti with pants</p>
                                <h5 class="mb-0"><i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 5000/-</h5>
                            </div>
                            <div class="text-center section-addtobag-div add-to-bag">
                                <button type="submit" class="btn btn-default contact-us-orders-btn section-addtobag">Add to Bag</button>
                            </div>
                        </div>
                    </a>
                    <i class="far fa-heart wishlist-heart"></i>
                    <i class="fas fa-heart wishlist-heart2"></i>
                </div>

                <!-- card one -->
                <div class="col-6 col-md-4 main-content2">
                    <a href="#" style="text-decoration: none;">
                        <div class="section-card">
                            <img class="section-card-img no-price-off-label" src="image/section/3.jpg" alt="womes's wear">
                            <div class="baisa-offer-caption">
                                <p class="mb-1">Baisa blue and white printed kurti with pants</p>
                                <h5 class="mb-0"><i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 5000/-</h5>
                            </div>
                            <div class="text-center section-addtobag-div">
                                <button type="submit" class="btn btn-default contact-us-orders-btn section-addtobag">Add to Bag</button>
                            </div>
                        </div>
                    </a>
                    <i class="far fa-heart wishlist-heart"></i>
                    <i class="fas fa-heart wishlist-heart2"></i>
                </div>

                <!-- card two -->
                <div class="col-6 col-md-4 main-content2">
                    <a href="#" style="text-decoration: none;">
                        <div class="section-card">
                            <img class="section-card-img no-price-off-label" src="image/section/2.jpg" alt="womes's wear">
                            <div class="baisa-offer-caption">
                                <p class="mb-1">Baisa blue and white printed kurti with pants</p>
                                <h5 class="mb-0"><i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 5000/-</h5>
                            </div>
                            <div class="text-center section-addtobag-div">
                                <button type="submit" class="btn btn-default contact-us-orders-btn section-addtobag">Add to Bag</button>
                            </div>
                        </div>
                    </a>
                    <i class="far fa-heart wishlist-heart"></i>
                    <i class="fas fa-heart wishlist-heart2"></i>
                </div>
                <div class="col-6 col-md-4 main-content2">
                    <a href="#" style="text-decoration: none;">
                        <div class="section-card">
                            <img class="section-card-img no-price-off-label" src="image/section/7.jpg" alt="womes's wear">
                            <div class="baisa-offer-caption">
                                <p class="mb-1">Baisa blue and white printed kurti with pants</p>
                                <h5 class="mb-0"><i class="fas fa-rupee-sign rupee-symbol-checkout"></i> 5000/-</h5>
                            </div>
                            <div class="text-center section-addtobag-div">
                                <button type="submit" class="btn btn-default contact-us-orders-btn section-addtobag">Add to Bag</button>
                            </div>
                        </div>
                    </a>
                    <i class="far fa-heart wishlist-heart"></i>
                    <i class="fas fa-heart wishlist-heart2"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Next Page links-->
<div class="container mt-5 mb-md-5">
    <div class="row text-center">
        <div class="col-12">
            <div class="section-page">
                <ol>
                    <li class="current ml-md-5">1</li>
                    <li>
                        <a href="#" target="_blank">2</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">3</a>
                    </li>
                    <li>
                        <a href="#" target="_blank">4</a>
                    </li>
                    <li>
                        <a class="next" href="#" rel="next" title="next">Next</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>


<!-- Fashion Jewellery Slider-->

<div class="container mt-3">
    <div class="row mt-md-5 mt-2 mb-3 product-details-row ">
        <div class="col-12">
            <h3 style="color:#EA2A24;">
                MATCHING ACCESSORIES FOR YOU
            </h3>
        </div>
    </div>
    <div class="row mb-md-3">
        <div class="col-12 pl-0 mb-md-3">
            <div id="fashion-jewellery-slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="container similar-product-container">
                            <div class="row">
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#" style="text-decoration: none;">
                                        <img class="img-responsive" src="image/section/fashion-jewellery/1.jpg" alt="similar product">
                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#" style="text-decoration: none;">
                                        <img class="img-responsive" src="image/section/fashion-jewellery/2.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#" style="text-decoration: none;">
                                        <img class="img-responsive" src="image/section/fashion-jewellery/3.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#" style="text-decoration: none;">
                                        <img class="img-responsive" src="image/section/fashion-jewellery/4.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container similar-product-container">
                            <div class="row">
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#" style="text-decoration: none;">
                                        <img class="img-responsive" src="image/section/fashion-jewellery/5.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#" style="text-decoration: none;">
                                        <img class="img-responsive" src="image/section/fashion-jewellery/6.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#" style="text-decoration: none;">
                                        <img class="img-responsive" src="image/section/fashion-jewellery/7.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#" style="text-decoration: none;">
                                        <img class="img-responsive" src="image/section/fashion-jewellery/8.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev similar-products-slider-prev" href="#fashion-jewellery-slider" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left similarprod-lefticon sec-left-icon"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next similar-products-slider-next" href="#fashion-jewellery-slider" role="button" data-slide="next">
                    <i class="fas fa-chevron-right similarprod-righticon sec-right-icon"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

</div>


<!--Most popular on baisa slider-->

<div class="container mt-md-3">
    <div class="row mt-5 mb-3 product-details-row ">
        <div class="col-12">
            <h3 style="color:#EA2A24;">
                MOST POPULAR ON BAISA
            </h3>
        </div>
    </div>
    <div class="row mb-md-3">
        <div class="col-12 pl-0 mb-md-3">
            <div id="popular-product-slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-item active">
                        <div class="container similar-product-container">
                            <div class="row">
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#">
                                        <img class="img-responsive" src="image/product/similar/1.jpg" alt="similar product">
                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#">
                                        <img class="img-responsive" src="image/product/similar/2.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#">
                                        <img class="img-responsive" src="image/product/similar/3.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#">
                                        <img class="img-responsive" src="image/product/similar/4.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container similar-product-container">
                            <div class="row">
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#">
                                        <img class="img-responsive" src="image/product/similar/1.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#">
                                        <img class="img-responsive" src="image/product/similar/2.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#">
                                        <img class="img-responsive" src="image/product/similar/3.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                                <div class="col-3 mb-2 pr-0 main-content2">
                                    <a href="#">
                                        <img class="img-responsive" src="image/product/similar/4.jpg" alt="similar product">

                                    </a>
                                    <i class="far fa-heart wishlist-heart"></i>
                                    <i class="fas fa-heart wishlist-heart2"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev similar-products-slider-prev" href="#popular-product-slider" role="button" data-slide="prev">
                    <i class="fas fa-chevron-left similarprod-lefticon sec-left-icon"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next similar-products-slider-next" href="#popular-product-slider" role="button" data-slide="next">
                    <i class="fas fa-chevron-right similarprod-righticon  sec-right-icon"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

</div>


<!--Scroll to top button--->
<a href="#" id="scrollToTop"><i class="fas fa-arrow-alt-circle-up" style="color: #ffffff;margin-top:10px;font-size:30px;"></i></a>

<?php include_once 'footer.php'; ?>