<?php
session_start();
$is_homepage = false;
require_once('components/header.php');
?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Vegetable’s Package</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php">Home</a>
                            <a href="shop.php">Vegetables</a>
                            <span>Vegetable’s Package</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="img/product/details/product-details-1.jpg" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="img/product/details/thumb-1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="img/product/details/thumb-2.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="img/product/details/thumb-3.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="img/product/details/thumb-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>Vetgetable’s Package</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <div class="product__details__price">$50.00</div>
                        <p>Our NEW seasonal box of fruit and veg comes from one of Kenya’s top exporters of fruit and vegetables. This means it means EU standards for quality, and safety. No unnecessary pesticides or chemicals have been sprayed on these products, except within permitted guidelines issued by the European Union. We’ve worked really hard with our producer to ensure that we cut down on as much packaging as possible, so aside from soft fruit (which would otherwise be irreparably damaged) there is no plastic packaging. You’ll simply receive your veggies, lovingly packed, in a sturdy cardboard box which we hope to be able to use up to 10 times. Please give it a brush out and keep it dry so that when we next deliver to you, we can collect the box.</p>
                        <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">ADD TO CARD</a>
                        <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                        <ul>
                            <li><b>Availability</b> <span>Còn hàng</span></li>
                            <li><b>Shipping</b> <span>01 ngày giao hàng 
                            <samp>Sale Today</samp></span></li>
                            <li><b>Weight</b> <span>0.5 kg</span></li>
                            <li><b>Share on</b>
                                <div class="share">
                                <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                                <a href="https://www.pinterest.com"><i class="fa fa-pinterest-p"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Description</h6>
                                    <h6>SAFE. LOCAL. DELICIOUS.</h6>
                                        Our NEW seasonal box of fruit and veg comes from one of Kenya’s top exporters of fruit and vegetables. This means it means EU standards for quality, and safety. No unnecessary pesticides or chemicals have been sprayed on these products, except within permitted guidelines issued by the European Union. We’ve worked really hard with our producer to ensure that we cut down on as much packaging as possible, so aside from soft fruit (which would otherwise be irreparably damaged) there is no plastic packaging. You’ll simply receive your veggies, lovingly packed, in a sturdy cardboard box which we hope to be able to use up to 10 times. Please give it a brush out and keep it dry so that when we next deliver to you, we can collect the box.
                                        <h6>What you can expect in your box</h6>
                                        You’ll be getting a mixed box of seasonal vegetables and some soft fruit depending on availability
                                        The veggies that are going into the Freshly boxes are delivered from the farm, then taken to their respective cares (high care/low care) at KHE to be prepared to pack. The same exact process stands for export veggies. KHE has have strict hygiene rules in place for employees who are in these units. KHE is audited regularly to ensure they abide by all standards (BRC, Global GAP, Sedex, ETI). The only difference would be for export, as the packaging must be in MAP bags to extend shelf life.
                                        </br><h6>About KHE</h6>
                                        These vegetables are grown by Kenyans for Kenyans. The producer we have partnered with – Kenya Horticultural Exporters – is a family business that has been operating for over 50 years. The business is committed to the HACCP system (a tool to assess hazards and establish control systems that focus on prevention rather than relying mainly on end-product testing) and the BRC Code of practice (focused on food safety) to ensure that the requirements for exporting safe, and quality produce are met and exceeded at all times.

                                        KHE grows and packs their own fruit and vegetables, which amount to more than 20 different crops – across 3 different owned sites in Kenya. They have our own nursery where they propagate over 4 million plants a month. KHE directly manages 3 major farms, owns 3 packhouses with state of the art cold chain systems, and has their our own packaging facility with MAP (Modified Atmosphere Packaging).
                                        There’s lots more info about KHE available here on their website.
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Infomation</h6>
                                    Although many customers have a written or mental list of fruits and vegetables they intend to buy, most buying decisions are made inside the store. The layout and organization of the retail store may help customers to make a purchase thereby increasing sales. The self-service system and the traditional personal service are the two main types of marketing methods. In many cases, a combination of both are offered.</br>
                                    Many customers prefer the traditional system because personal interaction increases buyer confidence. Loyalty can also be built provided good quality, freshness and reasonable prices are combined with good service and friendliness. The image presented by sales staff is important to the customer. This is because they tend to think that people who take care of themselves also take an interest in the produce sold in the store. Sales staff also need to be courteous and friendly towards the customer. There are several drawbacks to traditional personal selling. First, it is not appropriate for customers who are in a hurry. In addition to this, some sales are lost because serving customers requires additional time.</br>
                                    The self-service system requires an attractive display of goods and a good plan for space allocation of the items on sale. This is important because produce that is not visible or attractively presented, is hard to sell. Information about varieties and prices should be clearly legible. Customers should be able to weigh produce or select prepackaged products that have been pre-weighed and labeled. This marketing method is ideal for people who prefer rapid service and prefer to choose size, ripeness, quantity and quality according to their own purchasing criteria.</br>
                                    The main factors to consider for increasing sales in a self-service outlet are: accessibility, visibility and easy flow of circulation. Accessibility is a physical and psychological concept. If produce is piled up high, displayed in an untidy way or difficult to reach (Figure 66), this may have a negative impact on sales. Consumers also become confused and lose time looking for goods. Ease of circulation makes shopping more convenient, particularly if trolleys can be used. As previously mentioned, visibility is a key factor in determining the whether a product can be sold.</br>
                                    Merchandising techniques are important to increase the visibility of the product. From a distance of 2 meters, an average person sees an area starting at 0.80 meters from the floor and up to 2 meters high and about 2-3 meters wide. Visibility decreases dramatically outside the indicated area. A minimum area of 0.30 m wide per item is required for good visibility (Figure 67). Large products like watermelons, melons, pumpkins, etc. require more space. Special allocation and large displays like islands in the middle of the aisles can be used to draw attention for quick sales (Figure 68). Slanted shelves (30 - 45°) and mirrors can be used to enhance product presentation (Figure 69). Refrigerated shelves should be used for highly perishable crops (Figure 70).</br>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Products Review</h6>
                                    <div class="container">
                                        <h3>Share your reviews about our website</h3>
                                        <div class="rating">
                                            <span id="rating">0</span>/5
                                        </div>
                                        <div class="stars" id="stars">
                                            <span class="star" data-value="1">★</span>
                                            <span class="star" data-value="2">★</span>
                                            <span class="star" data-value="3">★</span>
                                            <span class="star" data-value="4">★</span>
                                            <span class="star" data-value="5">★</span>
                                        </div>
                                        <p>Share your review</p>
                                        <textarea id="review"
                                            placeholder="Write your review here">
                                        </textarea>
                                        <button id="submit">Submit</button>
                                        <div class="reviews" id="reviews">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    <?php

require_once('components/footer.php');
?>