@extends('layouts.main')
@section('head_meta')
<meta name="csrf_token" content="{{ csrf_token() }}" />
@endsection
<div id="page-content" class="page-content">
        <div class="banner">
            <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
                <div class="container">
                    <h1 class="pt-5">
                        Contact
                    </h1>
                    <p class="lead">
                        Don't Hesitate to Contact Us.
                    </p>
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
                                @if (true)
                <div>No hay Mensajes</div>
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
                        @foreach($comments ?? '' as $com)
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
                                <form data-aos="fade-left" data-aos-duration="1200" method="POST" action="{{route('contact')}}">
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