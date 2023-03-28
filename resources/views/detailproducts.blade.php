@extends('layouts.main')
@section('content')

<div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('{{asset('assets/img/bg-header.jpg')}}');">
                <div class="container">
                    <h1 class="pt-5">
                        {{$products->product_name}}
                    </h1>
                    <p class="lead">
                        Save time and leave the groceries to us.
                    </p>
                </div>
            </div>
        </div>
        <div class="product-detail">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="slider-zoom">
                            <a href="{{asset('assets/img')}}/{{$products->image}}" class="cloud-zoom" rel="transparentImage: 'data:image/gif;base64,R0lGODlhAQABAID/AMDAwAAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==', useWrapper: false, showTitle: false, zoomWidth:'500', zoomHeight:'500', adjustY:0, adjustX:10" id="cloudZoom">
                                <img alt="Detail Zoom thumbs image" src="{{asset('assets/img')}}/{{$products->image}}" style="width: 100%;">
                            </a>
                        </div>


                    </div>
                    <div class="col-sm-6">
                        <p>
                            <strong>Descripciòn</strong><br>
                            {{$products->description}}
                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <p>
                                    <strong>Price</strong> (/Pack)<br>
                                    <span class="price">{{$products->sale_price}}</span>
                                    <span class="old-price">{{$products->sale_price}}</span>
                                </p>
                            </div>
                            <div class="col-sm-6 text-right">
                                <p>
                                    <span class="stock available">In Stock: 99</span>
                                </p>
                            </div>
                        </div>
                        <p class="mb-1">
                            <strong>{{$products->quantity}}</strong>
                        </p>
                        <div class="row">
                            <div class="col-sm-5">
                                <input class="vertical-spin" type="text" data-bts-button-down-class="btn btn-primary" data-bts-button-up-class="btn btn-primary" value="" name="vertical-spin">
                            </div>
                            <div class="col-sm-6"><span class="pt-1 d-inline-block">Pack (250 gram)</span></div>
                        </div>

                        <button class="mt-3 btn btn-primary btn-lg">
                            <i class="fa fa-shopping-basket"></i> Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>

        
        <section class="pb-0">
            <div class="contact1 mb-5">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div class="contact-wrapper">
                                <h3 class="title font-weight-normal mt-0 text-left">Comments for this Product</h3>
                                @if ($comments->isEmpty())
                <div>No Comments Here</div>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $com)
                        @if($com->product_id==$products->id)
                            <tr>
                                <td>{!! $com->fullname !!}</td>
                                <td>{!! $com->email !!}</td>
                                <td>{!! $com->message!!}</td>
                            </tr>
                            @endif
                        @endforeach
                            
                        </tbody>
                    </table>
                @endif
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        

        <section class="pb-0">
            <div class="contact1 mb-5">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div class="contact-wrapper">
                                <h3 class="title font-weight-normal mt-0 text-left">Send Us a Comment for this Product</h3>
                                <form data-aos="fade-left" data-aos-duration="1200" method="POST" action="{{route('commentsbd')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="fullname" class="form-control" type="text" placeholder="Full Name" value="{{old('fullname')}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input name="email" class="form-control" type="email" placeholder="Email" value="{{old('email')}}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" rows="3" placeholder="Message" value="{{old('message')}}"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-right">
                                            <button type="submit" class="btn btn-lg btn-primary mb-5">Send</button>
                                        </div>
                                        <input name="product_id" class="form-control" type="hidden" value="{{$products->id}}">
                                    </div>
                                    @if(session()->get('success'))
                                        <div class="alert alert-success text-center">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>

        
    </div>
    @endsection