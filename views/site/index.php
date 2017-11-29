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

                    <div class="shipping-text">
                        <h3>Безкоштовна доставка</h3>
                        <p>При покупці понад 500 гривень</p>
                    </div>
                    <div class="shipping">
                        <img src="/template/images/shipping.png" alt="" />
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 online-order">
                    <h3>Телефон для замовлень</h3><br>
                    <p>Тел: 0 800 825 825 </p>
                </div>
                <div class="clearfix"></div>
            </div>



            <div class="products-grid">
                <header>
                    <h3 class="head text-center">Нові надходження</h3>
                </header>
            <?php foreach ($latestProducts as $product): ?>

                <div class="col-md-4 product simpleCart_shelfItem text-center">


                    <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />


                    <div class="mask">
                        <a href="/product/<?php echo $product['id']; ?>">Швидкий перегляд</a>

                    </div>
                    <a class="product_name" href="/product/<?php echo $product['id']; ?>"><?php echo $product['name']; ?></a>

                    <p><a class="btn btn-default add-to-cart" href="#" data-id="<?php echo $product['id']; ?>"> <i></i> <span class="item_price"><?php echo $product['price']; ?></span></a></p>



                </div>
            <?php endforeach; ?>

            </div>

                <div class="clearfix"></div>

        </div>

    </div>
    <div class="other-products">
        <div class="container">
            <h3 class="like text-center">Акційні пропозиції</h3>
            <ul id="flexiselDemo3">
                <?php foreach ($sliderProducts as $sliderItem): ?>
                <li><a href="/product/<?php echo $sliderItem['id']; ?>"><img src="<?php echo Product::getImage($sliderItem['id']); ?>" class="img-responsive" alt=""  /></a>
                    <div class="product liked-product simpleCart_shelfItem">
                        <a class="like_name" href="/product/<?php echo $sliderItem['id']; ?>"><?php echo $sliderItem['name']; ?></a>
                        <p><a class="item_add" href="#"><i></i> <span class=" item_price"><?php echo $sliderItem['price']; ?></span></a></p>
                    </div>
                </li>
    <?php endforeach; ?>

            </ul>
            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo3").flexisel({
                        visibleItems: 4,
                        animationSpeed: 500,
                        autoPlay: true,
                        autoPlaySpeed: 1000,
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