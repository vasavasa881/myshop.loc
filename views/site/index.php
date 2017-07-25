<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="banner">
        <div class="container">
            <div class="banner-bottom">
               <!-- <div class="banner-bottom-left">
                    <h3>Якісний<br>Дитячий<br>Одяг</h3>
                </div>-->
                <div class="banner-bottom-right">
                    <div  class="callbacks_container">
                        <ul class="rslides" id="slider4">
                            <li>
                                <div class="banner-info">
                                    <h3>Лише якісний одяг</h3>
                                    <p>Розпочни свій шопінг тут..</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <h3>Купляй онлайн</h3>
                                    <p>Розпочни свій шопінг тут..</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <h3>Низькі ціни</h3>
                                    <p>Розпочни свій шопінг тут...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--banner-->
                    <script src="/template/js/responsiveslides.min.js"></script>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: true,
                                pager:true,
                                nav:false,
                                speed: 500,
                                namespace: "callbacks",
                                before: function () {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function () {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });
                    </script>
                </div>
                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
    <!-- content-section-starts-here -->
    <div class="container">
        <div class="main-content">
            <div class="online-strip">
                <div class="col-md-4 follow-us">
                    <h3>Слідкуй за нами: <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
                </div>
                <div class="col-md-4 shipping-grid">
                    <div class="shipping">
                        <img src="/template/images/shipping.png" alt="" />
                    </div>
                    <div class="shipping-text">
                        <h3>Безкоштовна доставка</h3>
                        <p>При покупці понад 500 гривень</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 online-order">
                    <p>Телефон для замовлень</p>
                    <h3>Тел: 0 800 825 825 /h3>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="products-grid">
                <header>
                    <h3 class="head text-center">Нові надходження</h3>
                </header>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="/template/images/p1.jpg" alt="" /></a>
                    <div class="mask">
                        <a href="single.html">Швидкий перегляд</a>
                    </div>
                    <a class="product_name" href="single.html">**назва товару</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">** ціна</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="/template/images/p2.jpg" alt="" /></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">great explorer</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$599.8</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="/template/images/p3.jpg" alt="" /></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">similique sunt</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$359.6</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="/template/images/p4.jpg" alt="" /></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">shrinking </a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$649.99</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="/template/images/p5.jpg" alt="" /></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">perfectly simple</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$750</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="/template/images/p6.jpg" alt="" /></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">equal blame</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$295.59</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="/template/images/p7.jpg" alt="" /></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">Neque porro</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$380</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="/template/images/p8.jpg" alt="" /></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">perfectly simple</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$540.6</span></a></p>
                </div>
                <div class="col-md-4 product simpleCart_shelfItem text-center">
                    <a href="single.html"><img src="/template/images/p9.jpg" alt="" /></a>
                    <div class="mask">
                        <a href="single.html">Quick View</a>
                    </div>
                    <a class="product_name" href="single.html">praising pain</a>
                    <p><a class="item_add" href="#"><i></i> <span class="item_price">$229.5</span></a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <div class="other-products">
        <div class="container">
            <h3 class="like text-center">Акційні пропозиції</h3>
            <ul id="flexiselDemo3">
                <li><a href="single.html"><img src="/template/images/l1.jpg" class="img-responsive" alt="" /></a>
                    <div class="product liked-product simpleCart_shelfItem">
                        <a class="like_name" href="single.html">perfectly simple</a>
                        <p><a class="item_add" href="#"><i></i> <span class=" item_price">$759</span></a></p>
                    </div>
                </li>
                <li><a href="single.html"><img src="/template/images/l2.jpg" class="img-responsive" alt="" /></a>
                    <div class="product liked-product simpleCart_shelfItem">
                        <a class="like_name" href="single.html">praising pain</a>
                        <p><a class="item_add" href="#"><i></i> <span class=" item_price">$699</span></a></p>
                    </div>
                </li>
                <li><a href="single.html"><img src="/template/images/l3.jpg" class="img-responsive" alt="" /></a>
                    <div class="product liked-product simpleCart_shelfItem">
                        <a class="like_name" href="single.html">Neque porro</a>
                        <p><a class="item_add" href="#"><i></i> <span class=" item_price">$329</span></a></p>
                    </div>
                </li>
                <li><a href="single.html"><img src="/template/images/l4.jpg" class="img-responsive" alt="" /></a>
                    <div class="product liked-product simpleCart_shelfItem">
                        <a class="like_name" href="single.html">equal blame</a>
                        <p><a class="item_add" href="#"><i></i> <span class=" item_price">$499</span></a></p>
                    </div>
                </li>
                <li><a href="single.html"><img src="/template/images/l5.jpg" class="img-responsive" alt="" /></a>
                    <div class="product liked-product simpleCart_shelfItem">
                        <a class="like_name" href="single.html">perfectly simple</a>
                        <p><a class="item_add" href="#"><i></i> <span class=" item_price">$649</span></a></p>
                    </div>
                </li>
            </ul>
            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo3").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 300,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="/template/js/jquery.flexisel.js"></script>
        </div>
    </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>