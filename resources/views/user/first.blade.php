@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12 text-left">
                <ul class="list list-inline">
                    <li><a href="javascript:void(0);" data-toggle="collapse" data-target=".sidebarFilter"><i class="fa fa-align-left mr-5"></i> Filter</a></li>
                </ul>
            </div><!-- end col -->
        </div><!-- end row -->
        
        <hr class="spacer-5"><hr class="spacer-20 no-border">
        
        <div class="sidebarFilter collapse">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget">
                        <h6 class="subtitle thin">Cari</h6>
                        <form>
                            <input type="text" id="lastname" class="form-control input-sm" placeholder="Cari">
                        </form>
                    </div><!-- end widget -->
                </div><!-- end col -->
                <div class="col-sm-3">
                    <div class="widget">
                        <h6 class="subtitle thin">Kategori</h6>

                        <ul class="list list-unstyled">
                            <li>
                                <div class="checkbox-input checkbox-default">
                                    <input id="mens-category" class="styled" type="checkbox" checked>
                                    <label for="mens-category">
                                        Cemilan  <span class="text-dark">(11)</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox-input checkbox-default">
                                    <input id="womens-category" class="styled" type="checkbox" checked>
                                    <label for="womens-category">
                                        Sabun <span class="text-dark">(21)</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox-input checkbox-default0">
                                    <input id="kids-category" class="styled" type="checkbox" checked>
                                    <label for="kids-category">
                                        Rokok <span class="text-dark">(12)</span>
                                    </label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox-input checkbox-default0">
                                    <input id="fashion-category" class="styled" type="checkbox" checked>
                                    <label for="fashion-category">
                                        Sembako <span class="text-dark">(12)</span>
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div><!-- end widget -->
                </div><!-- end col -->
                <div class="col-sm-3">
                    <div class="widget">
                        <h6 class="subtitle thin">Harga</h6>

                        <form method="post" class="price-range" data-start-min="250" data-start-max="650" data-min="0" data-max="1000" data-step="1">
                            <div class="ui-range-values">
                                <div class="ui-range-value-min">
                                    Rp. <span></span>
                                    <input type="hidden">
                                </div> -
                                <div class="ui-range-value-max">
                                    Rp. <span></span>
                                    <input type="hidden">
                                </div>
                            </div>
                            <div class="ui-range-slider"></div>
                            <button type="submit" class="btn btn-light btn-block btn-sm">Filter</button>
                        </form>
                    </div><!-- end widget -->
                </div><!-- end col -->
                <div class="col-sm-3">
                    <div class="widget">
                        <h6 class="subtitle thin">Popular tags</h6>

                        <ul class="tags">
                            <li>
                                <a class="btn btn-gray-outline semi-circle btn-xs" href="javascript:void(0);">shoes</a>
                            </li>
                            <li>
                                <a class="btn btn-gray-outline semi-circle btn-xs" href="javascript:void(0);">shirt</a>
                            </li>
                            <li>
                                <a class="btn btn-gray-outline semi-circle btn-xs" href="javascript:void(0);">jacket</a>
                            </li>
                            <li>
                                <a class="btn btn-gray-outline semi-circle btn-xs" href="javascript:void(0);">sunglass</a>
                            </li>
                        </ul>
                    </div><!-- end widget -->
                </div><!-- end col -->
            </div><!-- end row -->
            
            <hr class="spacer-30">
            
        </div><!-- end sidebarFilter -->
        
        <div class="row column-4">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <div class="badges">
                            <span class="product-badge top left primary-background text-white semi-circle">Sale</span>
                            <span class="product-badge top right text-warning">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </span>
                        </div>
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img class="front" src="{{ url('img/0/products/men_01.jpg') }}" alt="">
                                <img class="back" src="{{ url('img/0/products/men_02.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <div class="badges">
                            <span class="product-badge top right danger-background text-white semi-circle">-20%</span>
                        </div>
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/women_01.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <div class="badges">
                            <span class="product-badge bottom left warning-background text-white semi-circle">Out of Stock</span>
                        </div>
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/bags_01.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <div class="badges">
                            <span class="product-badge bottom right info-background text-white semi-circle">New</span>
                        </div>
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/fashion_01.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/hoseholds_05.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/kids_01.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/shoes_01.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/technology_02.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/men_04.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/women_02.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/bags_05.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/hoseholds_04.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/bags_04.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/fashion_02.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/men_06.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
            
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail store style2">
                    <div class="header">
                        <figure class="layer">
                            <a href="javascript:void(0);">
                                <img src="{{ url('img/0/products/shoes_02.jpg') }}" alt="">
                            </a>
                        </figure>
                        <div class="icons">
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
                            <a class="icon" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
                            <a class="icon" href="javascript:void(0);" data-toggle="modal" data-target=".productQuickView"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="caption">
                        <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum dolor sit</a></h6>
                        <div class="price">
                            <small class="amount off">$68.99</small>
                            <span class="amount text-primary">$59.99</span>
                        </div>
                        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
                    </div><!-- end caption -->
                </div><!-- end thumbnail -->
            </div><!-- end col -->
        </div><!-- end row -->
        
        <hr class="spacer-10 no-border">
        
        <div class="row">
            <div class="col-sm-12 text-center">
                <nav>
                    <ul class="pagination">
                        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li class="active"><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                    </ul>
                </nav>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end col -->   
</div><!-- end row -->
@endsection