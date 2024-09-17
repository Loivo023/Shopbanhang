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
                        <h2>Checkout</h2>
                        <div class="breadcrumb__option">
                            <a href="index.php">Home</a>
                            <span>Checkout</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="https://docs.google.com/forms/d/e/1FAIpQLSc4y71w82v8SU3K6dZZ6rq25XLmRyGpVGfB8PmGAVeJgk6OEw/viewform?embedded=true" width="640" height="959" frameborder="0" marginheight="0" marginwidth="0">Click here</a> to enter your code
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Billing Details</h4>
                <form action="#">
                    <sclass="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Fist Name<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Last Name<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Country<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
                                <input type="text" placeholder="Street Address" class="checkout__input__add">
                                <input type="text" placeholder="Apartment, suite, unite ect (optinal)">
                            </div>
                            <div class="checkout__input">
                                <p>Town/City<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Country/State<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Postcode / ZIP<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Phone<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Create an account?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Create an account by entering the information below. If you are a returning customer
                                please login at the top of the page</p>
                            <div class="checkout__input">
                                <p>Account Password<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Ship to a different address?
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Order notes<span>*</span></p>
                                <input type="text"
                                    placeholder="Notes about your order, e.g. special notes for delivery.">
                            </div>
                        </div>
    </section>
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <!-- <form action="#"> -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="checkout__order">
                        <h4>Your Order</h4>
                        <div class="checkout__order__products">
                            Products <span>Total</span>
                        </div>
                        <table class="table">
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th>Hành động</th>
                            </tr>
                            <?php
                            $cart = [];
                            if (isset($_SESSION['cart'])) {
                                $cart = $_SESSION['cart'];
                            }
                            // var_dump($cart);die();
                            $count = 0; //số thứ tự
                            $total = 0;
                            foreach ($cart as $item) {
                                $total += $item['qty'] * $item['disscounted_price'];
                                ?>
                                <form action="updatecart.php?id=<?= $item['id'] ?>" method="post">

                                    <tr>
                                        <td>
                                            <?= ++$count ?>
                                        </td>
                                        <td>
                                            <?= $item['name'] ?>
                                        </td>
                                        <td>
                                            <?= number_format($item['disscounted_price'], 0, '', '.') . " VNĐ" ?>
                                        </td>
                                        <td><input type="number" name="qty" value="<?= $item['qty'] ?>" min="1" /></td>
                                        <td>
                                            <?= number_format($item['disscounted_price'] * $item['qty'], 0, '', '.') . " VNĐ" ?>
                                        </td>
                                        <td><button class="btn btn-warning">Cập nhật</button></td>
                                        <td><a href='deletecart.php?id=<?= $item['id'] ?>' class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr>
                                </form>

                                <?php
                            }
                            ?>


                        </table>
                        <div class="checkout__order__subtotal">Subtotal <span>$750.99</span>
                </div>
                        <div class="checkout__order__total">
                            Tổng tiền: <span>
                                <?= number_format($total, 0, '', '.') . " VNĐ" ?>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="shop.php" class="btn btn-primary">Tiếp tục mua sắm</a>
                            <a href="thanhtoan.php" class="btn btn-success">
                                Thanh toán
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
    <!-- Checkout Section End -->

    <?php

require_once('components/footer.php');
?>