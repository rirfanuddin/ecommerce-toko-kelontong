@extends('layouts.main')

@section('content')
<div class="row">
    <!-- start sidebar -->
    <div class="col-sm-3">
        <div class="widget">
            <h6 class="subtitle">Account Navigation</h6>
            
            <ul class="list list-unstyled">
                <li class="active">
                    <a href="my-account.html">My Account</a>
                </li>
                <li>
                    <a href="cart.html">My Cart <span class="text-primary">(3)</span></a>
                </li>
                <li>
                    <a href="order-list.html">My Order</a>
                </li>
                <li>
                    <a href="wishlist.html">Wishlist <span class="text-primary">(5)</span></a>
                </li>
                <li>
                    <a href="user-information.html">Settings</a>
                </li>
            </ul>
        </div><!-- end widget -->
        
        <div class="widget">
            <h6 class="subtitle">New Collection</h6>
            <figure>
                <a href="javascript:void(0);">
                    <img src="img/products/men_06.jpg" alt="collection">
                </a>
            </figure>
        </div><!-- end widget -->
        
        <div class="widget">
            <h6 class="subtitle">Featured</h6>
            
            <ul class="items">
                <li> 
                    <a href="shop-single-product-v1.html" class="product-image">
                        <img src="img/products/men_01.jpg" alt="Sample Product ">
                    </a>
                    <div class="product-details">
                        <p class="product-name"> 
                            <a href="shop-single-product-v1.html">Product name</a> 
                        </p>
                        <span class="price text-primary">$19.99</span>
                        <div class="rate text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </li><!-- end item -->
                <li> 
                    <a href="shop-single-product-v1.html" class="product-image">
                        <img src="img/products/women_02.jpg" alt="Sample Product ">
                    </a>
                    <div class="product-details">
                        <p class="product-name"> 
                            <a href="shop-single-product-v1.html">Product name</a> 
                        </p>
                        <span class="price text-primary">$19.99</span>
                        <div class="rate text-warning">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </li><!-- end item -->
            </ul>

            <hr class="spacer-10 no-border">
            <a href="shop-sidebar-left.html" class="btn btn-default btn-block semi-circle btn-md">All Products</a>
        </div><!-- end widget -->
    </div><!-- end col -->
    <!-- end sidebar -->
    <div class="col-sm-9">
        <div class="row">
            <div class="col-sm-12 text-left">
                <h2 class="title">My Account</h2>
            </div><!-- end col -->
        </div><!-- end row -->
        
        <hr class="spacer-5"><hr class="spacer-20 no-border">
        
        <div class="row">
            <div class="col-sm-12">
                <p>Hi <strong>username</strong>! you can change your info <a href="user-information.html">here</a></p>
                
                <hr class="spacer-30 no-border">
                
                <div class="row">
                    <div class="col-sm-12">
                        <h5 class="mb-20 thin"><a href="javascript:void(0);">Recently Viewed</a></h5>
                    </div><!-- end col -->
                </div><!-- end row -->

                <div id="owl-demo" class="owl-carousel column-5 owl-theme">
                    <div class="item">
                        <figure>
                            <a href="shop-single-product-v1.html">
                                <img src="img/products/men_01.jpg" alt="">
                            </a>
                        </figure>
                    </div><!-- end item -->
                    <div class="item">
                        <figure>
                            <a href="shop-single-product-v1.html">
                                <img src="img/products/fashion_01.jpg" alt="">
                            </a>
                        </figure>
                    </div><!-- end item -->
                    <div class="item">
                        <figure>
                            <a href="shop-single-product-v1.html">
                                <img src="img/products/fashion_02.jpg" alt="">
                            </a>
                        </figure>
                    </div><!-- end item -->
                    <div class="item">
                        <figure>
                            <a href="shop-single-product-v1.html">
                                <img src="img/products/hoseholds_03.jpg" alt="">
                            </a>
                        </figure>
                    </div><!-- end item -->
                    <div class="item">
                        <figure>
                            <a href="shop-single-product-v1.html">
                                <img src="img/products/bags_04.jpg" alt="">
                            </a>
                        </figure>
                    </div><!-- end item -->
                    <div class="item">
                        <figure>
                            <a href="shop-single-product-v1.html">
                                <img src="img/products/men_03.jpg" alt="">
                            </a>
                        </figure>
                    </div><!-- end item -->
                    <div class="item">
                        <figure>
                            <a href="shop-single-product-v1.html">
                                <img src="img/products/technology_02.jpg" alt="">
                            </a>
                        </figure>
                    </div><!-- end item -->
                    <div class="item">
                        <figure>
                            <a href="shop-single-product-v1.html">
                                <img src="img/products/shoes_01.jpg" alt="">
                            </a>
                        </figure>
                    </div><!-- end item -->
                </div><!-- end owl carousel -->
                
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end col -->
</div><!-- end row --> 
@endsection