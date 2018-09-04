<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Seosight - Shop</title>

    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/primary-menu.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

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

    <!-- End Books products grid -->

    <div class="container">
        <div class="row pt120">
            <div class="books-grid">




            <div class="row mb30">
              @foreach ($products as $product)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                    <div class="books-item">
                        <div class="books-item-thumb">
                            <a href="/product-detail/{{$product->id}}">
                              <img src="/uploads/{{$product->image}}" alt="book" >
                            </a>
                            <div class="new">New</div>
                            <div class="sale">Sale</div>
                            <div class="overlay overlay-books"></div>
                        </div>

                        <div class="books-item-info">
                            <h5 class="books-title"><a href="/product-detail/{{$product->id}}">{{$product->name}}</a></h5>

                            <div class="books-price">${{$product->price}}</div>
                        </div>

                        <a href="{{route('cart.add1',$product->id)}}" class="btn btn-small btn--dark add">
                            <span class="text">Add to Cart</span>
                            <i class="seoicon-commerce"></i>
                        </a>

                    </div>

                </div>
                @endforeach
            </div>



            <div class="row pb120">

                <div class="col-lg-12">

                  {{$products->links()}}

                </div>

            </div>

        </div>
        </div>
    </div>
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



<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/crum-mega-menu.js"></script>
<script src="js/swiper.jquery.min.js"></script>
<script src="js/theme-plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/form-actions.js"></script>

<script src="js/velocity.min.js"></script>
<script src="js/ScrollMagic.min.js"></script>
<script src="js/animation.velocity.min.js"></script>

<!-- ...end JS Script -->


</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>
