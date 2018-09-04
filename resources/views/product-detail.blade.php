<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Seosight - Shop</title>

    <link rel="stylesheet" type="text/css" href="/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="/css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/grid.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/css/primary-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

<header class="header" id="site-header">

    <div class="container">

        <div class="header-content-wrapper">

            <ul class="nav-add">
              <li class="cart">

                  <a href="#" class="js-cart-animate">
                      <i class="seoicon-basket"></i>
                      <span class="cart-count">{{Cart::content()->count()}}</span>
                  </a>

                  <div class="cart-popup-wrap">
                      <div class="popup-cart">
                         @if (Cart::content()->count()<1)
                           <h4 class="title-cart">No products in the cart!</h4>
                           <p class="subtitle">Please make your choice.</p>
                         @else
                          <h4 class="title-cart">{{Cart::content()->count()}} products in the cart</h4>
                          <p class="subtitle">Total: ${{Cart::total()}}</p>
                        @endif
                          <a href="/cart">
                          <div class="btn btn-small btn--dark">
                              <span class="text">View Cart</span>
                          </div>
                        </a>
                      </div>
                  </div>

              </li>
            </ul>
        </div>

    </div>

</header>


<div class="content-wrapper">



<!-- Books products grid -->


<div class="container">
    <div class="row pt120">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="heading align-center mb60">
                <h4 class="h1 heading-title">Udemy E-commerce tutorial</h4>

                <p class="heading-text">Buy books, and we ship to you.

                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row medium-padding120">
        <div class="product-details">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                <div class="product-details-thumb">
                    <div class="swiper-container" data-effect="fade">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="product-details-img-wrap swiper-slide">
                                <img src="/uploads/{{$product->image}}" alt="product" data-swiper-parallax="-10">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                <div class="product-details-info">
                    <div class="product-details-info-price">${{$product->price}}</div>
                    <h3 class="product-details-info-title">{{$product->name}}</h3>
                    <p class="product-details-info-text">{{$product->description}}
                    </p>

                    <form class="" action="{{route('cart.add')}}" method="post">
                      {{ csrf_field() }}
                      <div class="quantity">
                          <a href="#" class="quantity-minus quantity-minus-d">-</a>
                          <input title="Qty" class="email input-text qty text" name="qty" type="text" value="1">
                          <a href="#" class="quantity-plus quantity-plus-d">+</a>
                      </div>

                       <input type="hidden" name="pdt_id" value="{{$product->id}}">

                      <button class="btn btn-medium btn--primary">
                          <span class="text">Add to Cart</span>
                          <i class="seoicon-commerce"></i>
                          <span class="semicircle"></span>
                      </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Books products grid -->



</div>

<!-- Footer -->

<footer class="footer">

    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                </div>
            </div>
        </div>
    </div>

</footer>



<script src="/js/jquery-2.1.4.min.js"></script>
<script src="/js/crum-mega-menu.js"></script>
<script src="/js/swiper.jquery.min.js"></script>
<script src="/js/theme-plugins.js"></script>
<script src="/js/main.js"></script>
<script src="/js/form-actions.js"></script>

<script src="/js/velocity.min.js"></script>
<script src="/js/ScrollMagic.min.js"></script>
<script src="/js/animation.velocity.min.js"></script>

<!-- ...end JS Script -->


</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>
