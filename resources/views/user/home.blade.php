@extends('layouts.main')

@section('content')
<div class="row">
    <!-- start sidebar -->
    <div class="col-sm-3">
        <div class="widget">
            <h6 class="subtitle">Account Navigation</h6>
            
            <ul class="list list-unstyled">
                <li>
                    <a href="my-account.html">My Account</a>
                </li>
                <li>
                    <a href="cart.html">My Cart <span class="text-primary">(3)</span></a>
                </li>
                <li class="active">
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
                <h2 class="title">My Order</h2>
            </div><!-- end col -->
        </div><!-- end row -->
        
        <hr class="spacer-5"><hr class="spacer-20 no-border">
        
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">    
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th colspan="2">Products</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    #23AS17
                                </td>
                                <td>
                                    <a href="shop-single-product-v1.html">
                                        <img width="60px" src="img/products/men_06.jpg" alt="product">
                                    </a>
                                </td>
                                <td>
                                    <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum</a></h6>
                                    <p>Sed aliquam tincidunt tempus</p>
                                </td>
                                <td>
                                    <span>$59.99</span>
                                </td>
                                <td>
                                    20 Dec 2016
                                </td>
                                <td>
                                    <span class="label label-primary">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    #2MA269
                                </td>
                                <td>
                                    <a href="shop-single-product-v1.html">
                                        <img width="60px" src="img/products/shoes_01.jpg" alt="product">
                                    </a>
                                </td>
                                <td>
                                    <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum</a></h6>
                                    <p>Sed aliquam tincidunt tempus</p>
                                </td>
                                <td>
                                    <span>$39.99</span>
                                </td>
                                <td>
                                    09 Nov 2016
                                </td>
                                <td>
                                    <span class="label label-danger">Cancel</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    #973C5J
                                </td>
                                <td>
                                    <a href="shop-single-product-v1.html">
                                        <img width="60px" src="img/products/bags_07.jpg" alt="product">
                                    </a>
                                </td>
                                <td>
                                    <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum</a></h6>
                                    <p>Sed aliquam tincidunt tempus</p>
                                </td>
                                <td>
                                    <span>$29.99</span>
                                </td>
                                <td>
                                    23 Oct 2016
                                </td>
                                <td>
                                    <span class="label label-success">Done</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    #113V5G
                                </td>
                                <td>
                                    <a href="shop-single-product-v1.html">
                                        <img width="60px" src="img/products/bags_03.jpg" alt="product">
                                    </a>
                                </td>
                                <td>
                                    <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum</a></h6>
                                    <p>Sed aliquam tincidunt tempus</p>
                                </td>
                                <td>
                                    <span>$19.99</span>
                                </td>
                                <td>
                                    17 Sep 2016
                                </td>
                                <td>
                                    <span class="label label-default">Disable</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    #113V5G
                                </td>
                                <td>
                                    <a href="shop-single-product-v1.html">
                                        <img width="60px" src="img/products/bags_04.jpg" alt="product">
                                    </a>
                                </td>
                                <td>
                                    <h6 class="regular"><a href="shop-single-product-v1.html">Lorem Ipsum</a></h6>
                                    <p>Sed aliquam tincidunt tempus</p>
                                </td>
                                <td>
                                    <span>$19.99</span>
                                </td>
                                <td>
                                    13 Sep 2016
                                </td>
                                <td>
                                    <span class="label label-warning">Awaiting</span>
                                </td>
                            </tr>
                        </tbody>
                    </table><!-- end table -->
                </div><!-- end table-responsive -->
                
                <hr class="spacer-10 no-border">
                
                <a href="checkout.html" class="btn btn-light semi-circle btn-md">
                    <i class="fa fa-arrow-left mr-5"></i> Shopping
                </a>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end col -->
</div><!-- end row -->                
@endsection