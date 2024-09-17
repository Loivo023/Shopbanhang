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
                        <h2>Blog</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="index.php">All</a></li>
                                <li><a href="https://drbaumann.vn/blogs/news/clean-beauty-la-gi">Beauty (20)</a></li>
                                <li><a href="cart.php">Food (5)</a></li>
                                <li><a href="https://tamanh.net/lifestyle-la-gi.html">Life Style</a></li>
                                <li><a href="https://www.goabroad.com/articles/why-traveling-is-important">Travel (10)</a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Recent News</h4>
                            <div class="blog__sidebar__recent">
                                <a href="https://bagla.vn/chi-tiet-tin/9-Kinds-Of-Vegetables-Protect-The-Liver-374-508.html?lang=VN" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-1.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>09 Kinds Of Vegetables<br /> Protect The Liver</h6>
                                        <span>September 10, 2024</span>
                                    </div>
                                </a>
                                <a href="https://bagla.vn/chi-tiet-tin/Tips-You-To-Balance-Nutrition-Meal-Day-374-507.html" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-2.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Tips You To Balance<br /> Nutrition Meal Day</h6>
                                        <span>September 10, 2024</span>
                                    </div>
                                </a>
                                <a href="https://www.vinmec.com/eng/article/is-eating-vegetables-effective-for-weight-loss-en" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="img/blog/sidebar/sr-3.jpg" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>4 Principles Help You Lose <br />Weight With Vegetables</h6>
                                        <span>September 10, 2024</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Search By</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="index.php">Apple</a>
                                <a href="https://drbaumann.vn/blogs/news/clean-beauty-la-gi">Beauty</a>
                                <a href="index.php">Vegetables</a>
                                <a href="index.php">Fruit</a>
                                <a href="index.php">Healthy Food</a>
                                <a href="https://tamanh.net/lifestyle-la-gi.html">Lifestyle</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-2.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> September 10, 2024</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="https://www.myrecipes.com/extracrispy/25-quick-breakfast-recipes-to-make-in-30-minutes-or-less">25 ways to prepare breakfast for 30</a></h5>
                                    <p>You can make a batch of this blueberry breakfast quinoa in five minutes flat. If blueberries aren't your favorite fruit, try peaches or strawberries or even bananas instead.</p>
                                    <a href="https://www.pinterest.com/pin/240661173817052669/" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-3.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 7,2024</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="https://www.ans.iastate.edu/farms/visiting-farm">Visit the clean farm in the US</a></h5>
                                    <p>As part of Iowa State University, the farms are intended to be an educational resource for students and the community. In order to ensure the safety of visitors, farm staff, and animals, tours of the farms are available through prior appointment only. We require tours to be scheduled 1 week in advance. To schedule a tour, please call the farm contact at the number provided below. If visitors arrive at the farm unannounced, they are encouraged to call the farm superintendent on arrival. </p>
                                    <a href="https://www.ans.iastate.edu/farms/visiting-farm" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-1.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2024</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="https://www.johnsoulesfoods.com/blog/cooking-tips-for-beginners/">Cooking tips make cooking simple</a></h5>
                                    <p>Cooking as a beginner doesn’t have to be stressful. With the right tips and practices, you can easily make delicious meals for the whole family to enjoy. Browse the nine easy tips and tricks below to help you in the kitchen! </p>
                                    <a href="https://www.johnsoulesfoods.com/blog/cooking-tips-for-beginners/" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-4.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2024</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="https://www.leithsonline.com/post/how-to-be-a-better-cook">21 Home Cooking Skills: How to Be a Better Cook</a></h5>
                                    <p>Have you ever wondered how to be a better cook? Contrary to what some celebrity chefs would have you believe, you don’t need to have had an Italian nonna teaching you how to roll pasta when you were still in nappies; and you don’t need to have done ten years’ hard labour under a Michelin-starred French chef in Paris. You just need a willingness to learn. The rest can be taught.‍</p>
                                    <a href="https://www.leithsonline.com/post/how-to-be-a-better-cook  " class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-4.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2024</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="https://ecolife.posthemes.com/demo8/organic7/fr/smartblog/organic-the-moment-you-need-to-remove-garlic-.html">The Moment You Need To Remove Garlic From The Menu</a></h5>
                                    <p>With Halloween creeping up and the weather starting to feel colder we want to inspire you to get a little bit creative in the kitchen this festive period, so we’ve treated you to a round-up of our favourite seasonal recipes from our most-loved foodie bloggers. </p>
                                    <a href="https://ecolife.posthemes.com/demo8/organic7/fr/smartblog/organic-the-moment-you-need-to-remove-garlic-.html" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="img/blog/blog-6.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> May 4,2024</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="https://shankitchen.com/cooking-tips-tricks/five-basic-things-for-easy-cooking/">Cooking tips make cooking simple</a></h5>
                                    <p>Sounds really simple but it is so disappointing to expect a firm hard-boiled egg and find a runny yolk, or vice versa for that matter. The longer the duration of the boiling time, the firmer the egg will be. For hard-boiled eggs, place them in a saucepan filled with normal temperature tap water. Bring the water to a boil, and then set the timer for at least 7 minutes to upto 10 minutes. Once the egg is cooked through, place it in cold water to stop it from overcooking.</p>
                                    <a href="https://shankitchen.com/cooking-tips-tricks/five-basic-things-for-easy-cooking/" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <?php

require_once('components/footer.php');
?>