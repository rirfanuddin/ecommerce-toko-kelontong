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
                <li>
                    <a href="order-list.html">My Order</a>
                </li>
                <li>
                    <a href="wishlist.html">Wishlist <span class="text-primary">(5)</span></a>
                </li>
                <li class="active">
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
                <h2 class="title">My personal information</h2>
            </div><!-- end col -->
        </div><!-- end row -->
        
        <hr class="spacer-5"><hr class="spacer-20 no-border">
        
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="firstname">First Name <span class="text-danger">*</span></label>
                    <input id="firstname" type="text" placeholder="First Name" name="firstname" class="form-control input-sm required">
                </div><!-- end form-group -->
                <div class="form-group">
                    <label for="lastname">Last Name <span class="text-danger">*</span></label>
                    <input id="lastname" type="text" placeholder="Last Name" name="lastname" class="form-control input-sm required">
                </div><!-- end form-group -->
                <div class="form-group">
                    <label for="email">Email Address <span class="text-danger">*</span></label>
                    <input id="email" type="email" placeholder="Email Address" name="email" class="form-control input-sm required email">
                </div><!-- end form-group -->
                <label>Date of Birth</label>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select class="form-control" name="select">
                                <option value="1">01</option>
                                <option value="2">02</option>
                                <option value="3">03</option>
                                <option value="4">04</option>
                                <option value="5">05</option>
                                <option value="6">06</option>
                                <option value="7">07</option>
                                <option value="8">08</option>
                                <option value="9">09</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select class="form-control" name="select">
                                <option value="january">January</option>
                                <option value="february">February</option>
                                <option value="march">March</option>
                                <option value="april">April</option>
                                <option value="may">May</option>
                                <option value="june">June</option>
                                <option value="july">July</option>
                                <option value="agust">Agust</option>
                                <option value="september">September</option>
                                <option value="october">October</option>
                                <option value="november">November</option>
                                <option value="december">December</option>
                            </select>
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                    <div class="col-sm-4">
                        <div class="form-group">
                            <select class="form-control" name="select">
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992" selected>1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                            </select>
                        </div><!-- end form-group -->
                    </div><!-- end col -->
                </div><!-- end row -->
                <div class="form-group">
                    <div class="checkbox-input checkbox-primary">
                        <input id="newsletter" class="styled" type="checkbox" checked>
                        <label for="newsletter">
                            Sign up for our newsletter!
                        </label>
                    </div>
                </div><!-- end form-group -->
                <div class="form-group">
                    <a href="javascript:void(0);" class="btn btn-default round btn-md"><i class="fa fa-save mr-5"></i> Save</a>
                </div><!-- end form-group -->
            </div><!-- end col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label for="oldPassword">Password <span class="text-danger">*</span></label>
                    <input id="oldPassword" type="password" placeholder="Password" name="oldPassword" class="form-control input-sm required">
                </div><!-- end form-group -->
                <div class="form-group">
                    <label for="newPassword">New Password</label>
                    <input id="newPassword" type="password" placeholder="New Password" name="newPassword" class="form-control input-sm required">
                </div><!-- end form-group -->
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input id="confirmPassword" type="password" placeholder="Confirm Password" name="confirmPassword" class="form-control input-sm required">
                </div><!-- end form-group -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end col -->
</div><!-- end row -->
@endsection