@extends('front.main')

@section('content')

<div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h1>Product Info</h1>
                </div>
            </div>
        </div>
        <div class="row product-info">
            <div class="col-md-8">
                <div class="product-info__title">
                    <h2>Product Title Here...</h2>
                </div>
                <div class="product-info__price">
                    <strong>Product Price:</strong> <span>150<sup>EGP</sup></span>
                </div>
                <div class="product-info__available">
                    <strong>Product Availability:</strong> <span>Available</span>
                </div>
                <div class="product-info__desc">
                    <h2>Product Description:</h2>
                    <p>Lorem ipsum dolor sit amet, ex blandit luptatum eos, duo nobis nonumes mediocritatem cu. Ut summo eligendi nec, vitae prompta theophrastus ad has. Recteque cotidieque duo ex. Mel at sale essent, euripidis evertitur argumentum his ex. Et vidit percipit mel. Meliore assentior ne eos, usu stet tincidunt adversarium id, et prima porro nam. Harum apeirian eu mel, eos etiam saperet docendi cu.</p>
                    <p>Ut mel copiosae sententiae. Ius mutat ipsum commodo ne, movet nostrud molestie est ne, ei ridens officiis voluptaria usu. Idque numquam principes in vix, ex consulatu instructior eos. Eu has tota inimicus, ocurreret consetetur in pri, in per porro deleniti accusata.</p>
                    <p>Homero option aperiam eam ex, mentitum delicata et has. Has nulla facilis et, cu mei fuisset periculis. Ea deserunt gloriatur conceptam mea. Feugait fastidii recteque qui cu.</p>
                </div>
                <br />
                <a href="#" class="btn btn-lg btn-danger"><i class="fa fa-shopping-cart"></i> Buy Now</a>
            </div>
            <div class="col-md-4">
                <div class="product-info__image">
                    <img src="{{asset('resources')}}/assets/images/abstract-q-c-380-380-10.jpg" class="img-responsive" alt="">
                </div>
            </div>
        </div>
    </div>

@stop