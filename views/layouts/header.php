<!DOCTYPE html>
<html>
<head>
    <title>Магазин дитячого одягу *****</title>
    <script src="/template/js/jquery.min.js"></script>

    <link href="/template/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="/template/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Custom Theme files -->
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <link href="/template/css/component.css" rel="stylesheet" type="text/css" media="all" />



    <link href="/template/css/main.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/template/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />


    <link rel="stylesheet" href="/template/css/flexslider.css" type="text/css" media="screen" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Дитячий одяг, детская одежда, купить одежду для детей" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <!-- for bootstrap working -->

    <!-- //for bootstrap working -->

    <script type="text/javascript" src="/template/js/bootstrap-3.1.1.min.js"></script>
</head>

<body>
<!-- header-section-starts -->
<header>
<div class="header">
    <div class="header-top-strip">
        <div class="container">
            <div class="header-top-left">
                <ul>

                    <li><a href="/user/register"><span class="glyphicon glyphicon-lock"> </span>Реєстрація</a></li>
                    <?php if (User::isGuest()): ?>
                        <li><a href="/user/login/"><i class="fa fa-lock"></i> Вхід</a></li>
                    <?php else: ?>
                        <li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                        <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Вихід</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="header-right">
                <div class="cart box_1">
                    <a href="/cart">
                        <h3>Корзина замовлень:   </h3>  <span id="cart-count" class="fa fa-shopping-cart">   <?php echo Cart::countItems(); ?> </span>
                    </a>

                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- header-section-ends -->
<div class="banner-top">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Меню</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <h1><a href="/"><span>E</span>- Дитячий одяг</a></h1>
                </div>
            </div>
            <!--/.navbar-header-->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Головна сторінка</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Для хлопчиків<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                          <!--      <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <h6>NEW IN</h6>

                                    </ul>
                                </div>-->
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <h6>Категорія</h6>

                                        <?php foreach ($categories as $categoryItem): ?>
                                            <?php if ($categoryItem['sex']==1): ?>
                                        <li><a href="/category/<?php echo $categoryItem['id']; ?>"><?php  echo $categoryItem['name']; ?></a></li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>

                                       <!-- <li><a href="products.html">Джинси і штани</a></li>
                                        <li><a href="products.html">Реглани і футболкі</a></li>
                                        <li><a href="products.html">Спортивний одяг</a></li>
                                        <li><a href="products.html">Жакети і піджаки</a></li>
                                        <li><a href="products.html">Рубашки</a></li>
                                        <li><a href="products.html">Комбінезони</a></li>
                                        <li><a href="products.html">Бодіки</a></li>-->
                                    </ul>
                                </div>
                            <!--    <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <h6>WATCHES</h6>
                                        <li><a href="products.html">Analog</a></li>
                                        <li><a href="products.html">Chronograph</a></li>
                                        <li><a href="products.html">Digital</a></li>
                                        <li><a href="products.html">Watch Cases</a></li>
                                    </ul>
                                </div>-->
                                <div class="clearfix"></div>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Для дівчаток <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                            <!--    <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <h6>NEW IN</h6>
                                        <li><a href="products.html">New In Clothing</a></li>
                                        <li><a href="products.html">New In Bags</a></li>
                                        <li><a href="products.html">New In Shoes</a></li>
                                        <li><a href="products.html">New In Watches</a></li>
                                        <li><a href="products.html">New In Beauty</a></li>
                                    </ul>
                                </div>-->
                                <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <h6>Категорії</h6>

                                        <?php foreach ($categories as $categoryItem): ?>
                                            <?php if ($categoryItem['sex']==1 || $categoryItem['sex']=2): ?>
                                                <li><a href="/category/<?php echo $categoryItem['id']; ?>"><?php  echo $categoryItem['name']; ?></a></li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>

                                        <!--<li><a href="products.html">Куртки</a></li>
                                        <li><a href="products.html">Джинси і штани</a></li>
                                        <li><a href="products.html">Реглани і футболкі</a></li>
                                        <li><a href="products.html">Спортивний одяг</a></li>
                                        <li><a href="products.html">Жакети і піджаки</a></li>
                                        <li><a href="products.html">Блузки</a></li>
                                        <li><a href="products.html">Комбінезони</a></li>
                                        <li><a href="products.html">Бодіки</a></li>
                                        <li><a href="products.html">Плаття</a></li>
                                        <li><a href="products.html">Сарафани</a></li>
                                        <li><a href="products.html">Спідниці</a></li>-->
                                    </ul>
                                </div>
                             <!--   <div class="col-sm-4">
                                    <ul class="multi-column-dropdown">
                                        <h6>WATCHES</h6>
                                        <li><a href="products.html">Analog</a></li>
                                        <li><a href="products.html">Chronograph</a></li>
                                        <li><a href="products.html">Digital</a></li>
                                        <li><a href="products.html">Watch Cases</a></li>
                                    </ul>
                                </div>-->
                                <div class="clearfix"></div>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Для малюків<b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-2">
                            <div class="row">
     <!--                           <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                                        <h6>NEW IN</h6>
                                        <li><a href="products.html">New In Boys Clothing</a></li>
                                        <li><a href="products.html">New In Girls Clothing</a></li>
                                        <li><a href="products.html">New In Boys Shoes</a></li>
                                        <li><a href="products.html">New In Girls Shoes</a></li>
                                    </ul>
                                </div>-->
                                <div class="col-sm-6">
                                    <ul class="multi-column-dropdown">
                                        <h6>Категорії</h6>
                                        <?php foreach ($categories as $categoryItem): ?>
                                            <?php if ($categoryItem['sex']!=2 or $categoryItem['name']=="Плаття"): ?>
                                                <li><a href="/category/<?php echo $categoryItem['id']; ?>"><?php  echo $categoryItem['name']; ?></a></li>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                       <!-- <li><a href="products.html">Бодіки</a></li>
                                        <li><a href="products.html">Комплекти</a></li>
                                        <li><a href="products.html">Комбінезони</a></li>
                                        <li><a href="products.html">Куртки</a></li>
                                        <li><a href="products.html">Джинси і штани</a></li>
                                        <li><a href="products.html">Реглани і футболки</a></li>
                                        <li><a href="products.html">Жакети і піджаки</a></li>
                                        <li><a href="products.html">Плаття</a></li>-->
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </ul>
                    </li>
                 <!--   <li><a href="typography.html">TYPO</a></li>-->
                    <li><a href="contact.html">Контакт</a></li>
                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
</div>
</header><!--/header-->