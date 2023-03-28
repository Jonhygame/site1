@extends('layouts.main')
@section('content')
<div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Shopping Page
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shop-categories owl-carousel mt-5">
                    @foreach ($categories as $c)
                        <div class="item">
                            <a href="#{{$c->category}}">
                                <div class="media d-flex align-items-center justify-content-center">
                                    <span class="d-flex mr-2"><i class="{{$c->image}}"></i></span>
                                    <div class="media-body">
                                        <h5>{{$c->category_name}}</h5>
                                        <p>{{$c->description}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        
        <section id="most-wanted">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">Most Wanted</h2>
                        <div class="product-carousel owl-carousel">
                        @foreach ($products as $p)
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until 2018
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="{{asset('assets/img') }}/{{$p->image}}" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detailproducts/{{$p->id}}">{{$p->product_name}} </a>
                                        </h4>
                                        <div class="card-price">
                                            <span class="discount">Rp.{{$p->sale_price}} </span>
                                            <span class="reguler">Rp. {{$p->sale_price}} </span>
                                        </div>
                                        <a href="detailproducts/{{$p->id}}" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>



        @foreach ($categories as $c)
        <section id="{{$c->category_name}}">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="title">{{$c->category_name}}</h2>
                        <div class="product-carousel owl-carousel">
                        @foreach ($c->products as $p)
                            <div class="item">
                                <div class="card card-product">
                                    <div class="card-ribbon">
                                        <div class="card-ribbon-container right">
                                            <span class="ribbon ribbon-primary">SPECIAL</span>
                                        </div>
                                    </div>
                                    <div class="card-badge">
                                        <div class="card-badge-container left">
                                            <span class="badge badge-default">
                                                Until 2018
                                            </span>
                                            <span class="badge badge-primary">
                                                20% OFF
                                            </span>
                                        </div>
                                        <img src="{{asset('assets/img') }}/{{$p->image}}" alt="Card image 2" class="card-img-top">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="detailproducts/{{$p->id}}">{{$p->product_name}} </a>
                                        </h4>
                                        <div class="card-price">
                                            <span class="discount">Rp.{{$p->sale_price}} </span>
                                            <span class="reguler">Rp. {{$p->sale_price}} </span>
                                        </div>
                                        <a href="detailproducts/{{$p->id}}" class="btn btn-block btn-primary">
                                            Add to Cart
                                        </a>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach

        
    </div>
@endsection