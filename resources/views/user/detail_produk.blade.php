@extends('layouts.main')

@section('content')
<div class="row">
    <!-- start sidebar -->
    <div class="col-sm-4">
        <div class='carousel slide product-slider' data-ride='carousel' data-interval="false">
            <div class='carousel-inner'>
                <div class='item active'>
                    <figure>
                        <img src='img/products/men_01.jpg' alt='' />
                    </figure>
                </div><!-- end item -->
                <div class='item'>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NrmMk1Myrxc"></iframe>
                    </div>
                </div><!-- end item -->
                <div class='item'>
                    <figure>
                        <img src='img/products/men_03.jpg' alt='' />
                    </figure>
                </div><!-- end item -->
                <div class='item'>
                    <figure>
                        <img src='img/products/men_04.jpg' alt='' />
                    </figure>
                </div><!-- end item -->
                <div class='item'>
                    <figure>
                        <img src='img/products/men_05.jpg' alt=''/>
                    </figure>
                </div><!-- end item -->

                <!-- Arrows -->
                <a class='left carousel-control' href='.html' data-slide='prev'>
                    <span class='fa fa-angle-left'></span>
                </a>
                <a class='right carousel-control' href='.html' data-slide='next'>
                    <span class='fa fa-angle-right'></span>
                </a>
            </div><!-- end carousel-inner -->

            <!-- thumbs -->
            <ol class='carousel-indicators mCustomScrollbar meartlab'>
                <li data-target='.product-slider' data-slide-to='0' class='active'><img src='img/products/men_01.jpg' alt='' /></li>
                <li data-target='.product-slider' data-slide-to='1'><img src='img/products/men_02.jpg' alt='' /></li>
                <li data-target='.product-slider' data-slide-to='2'><img src='img/products/men_03.jpg' alt='' /></li>
                <li data-target='.product-slider' data-slide-to='3'><img src='img/products/men_04.jpg' alt='' /></li>
                <li data-target='.product-slider' data-slide-to='4'><img src='img/products/men_05.jpg' alt='' /></li>
            </ol><!-- end carousel-indicators -->
        </div><!-- end carousel -->
    </div><!-- end col -->
    <!-- end sidebar -->
    <div class="col-sm-8">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title">Lorem ipsum dolor sit amet</h2>
                    <p class="text-gray alt-font">Product code: 1032446</p>
                    
                    <ul class="list list-inline">
                        <li><h6 class="text-danger text-xs">$179.99</h6></li>
                        <li><h5 class="text-primary">$79.99</h5></li>
                        <li>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star-half-o text-warning"></i>
                        </li>
                        <li><a href="javascript:void(0);">(4 reviews)</a></li>
                    </ul>
            </div><!-- end col -->
        </div><!-- end row -->
        
        <hr class="spacer-5"><hr class="spacer-10 no-border">
        
        <div class="row">
            <div class="col-sm-12">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                <ul class="list alt-list">
                    <li><i class="fa fa-check"></i> Lorem Ipsum dolor sit amet</li>
                    <li><i class="fa fa-check"></i> Cras aliquet venenatis sapien fringilla.</li>
                    <li><i class="fa fa-check"></i> Duis luctus erat vel pharetra aliquet.</li>
                </ul>
                <hr class="spacer-15">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <select class="form-control" name="select">
                            <option value="" selected>Color</option>
                            <option value="red">Red</option>
                            <option value="green">Green</option>
                            <option value="blue">Blue</option>
                        </select>
                    </div><!-- end col -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <select class="form-control" name="select">
                            <option value="">Size</option>
                            <option value="">S</option>
                            <option value="">M</option>
                            <option value="">L</option>
                            <option value="">XL</option>
                            <option value="">XXL</option>
                        </select>
                    </div><!-- end col -->
                    <div class="col-md-4 col-sm-12">
                        <select class="form-control" name="select">
                            <option value="" selected>QTY</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                            <option value="">5</option>
                            <option value="">6</option>
                            <option value="">7</option>
                        </select>
                    </div><!-- end col -->
                </div><!-- end row -->
                <hr class="spacer-15">
                
                <ul class="list list-inline">
                    <li><button type="button" class="btn btn-default btn-md round"><i class="fa fa-shopping-basket mr-5"></i>Add to Cart</button></li>
                    <li><button type="button" class="btn btn-gray btn-md round"><i class="fa fa-heart mr-5"></i>Add to Wishlist</button></li>
                    <li>Share this product: </li>
                    <li>
                        <ul class="social-icons style1">
                            <li class="facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="javascript:void(0);"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end col -->
</div><!-- end row -->
@endsection