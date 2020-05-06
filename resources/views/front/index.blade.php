@extends('front.main')


@section('content')

    <div class="col-md-12">
        <div class="jumbotron">
            <h1><i class="fa fa-heart"></i> Welcome to our store!</h1>
            <p>You will find the latest trendy clothes with the lowest prices in the market. We are dealing with high quality factories for the best wear experience...</p>
            <p><a class="btn btn-danger btn-lg" href="#" role="button">Learn more</a></p>
        </div>
    </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h1>Our Latest Products</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-box text-center">
                    <div class="product-box__image">
                        <a href="product-info.html">
                            <img src="{{asset('resources')}}/assets/images/abstract-q-c-380-200-5.jpg" class="img-responsive" alt="Product Image">
                            <span><i class="fa fa-star"></i> Product Info</span>
                        </a>
                    </div>
                    <div class="product-box__title">
                        <h2>Product Title Here...</h2>
                    </div>
                    <div class="product-box__desc">
                        <p>Lorem ipsum dolor sit amet, quo denique hendrerit cu, cu prima conclusionemque sed, reque affert nec ea.</p>
                    </div>
                    <div class="product-box__price">
                        <span>150<sup>EGP</sup></span>
                    </div>
                    <a href="product-info.html" class="btn btn-lg btn-success"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-box text-center">
                    <div class="product-box__image">
                        <a href="product-info.html">
                            <img src="{{asset('resources')}}/assets/images/abstract-q-c-380-200-5.jpg" class="img-responsive" alt="Product Image">
                            <span><i class="fa fa-star"></i> Product Info</span>
                        </a>
                    </div>
                    <div class="product-box__title">
                        <h2>Product Title Here...</h2>
                    </div>
                    <div class="product-box__desc">
                        <p>Lorem ipsum dolor sit amet, quo denique hendrerit cu, cu prima conclusionemque sed, reque affert nec ea.</p>
                    </div>
                    <div class="product-box__price">
                        <span>150<sup>EGP</sup></span>
                    </div>
                    <a href="product-info.html" class="btn btn-lg btn-success"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-box text-center">
                    <div class="product-box__image">
                        <a href="product-info.html">
                            <img src="{{asset('resources')}}/assets/images/abstract-q-c-380-200-5.jpg" class="img-responsive" alt="Product Image">
                            <span><i class="fa fa-star"></i> Product Info</span>
                        </a>
                    </div>
                    <div class="product-box__title">
                        <h2>Product Title Here...</h2>
                    </div>
                    <div class="product-box__desc">
                        <p>Lorem ipsum dolor sit amet, quo denique hendrerit cu, cu prima conclusionemque sed, reque affert nec ea.</p>
                    </div>
                    <div class="product-box__price">
                        <span>150<sup>EGP</sup></span>
                    </div>
                    <a href="product-info.html" class="btn btn-lg btn-success"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                </div>
            </div>
        </div>
    </div>

@stop