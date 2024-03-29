@extends('layouts.main')
@section('content')
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
                                <h3 class="title font-weight-normal mt-0 text-left">User Feedback </h3>
                                <table id="example">
                                    <thead>
                                   <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Message</th>
                        
                                   </tr>
                                    </thead>
                                    <tbody>
                                     
                                            @foreach($contact  as $contacto)
                                            <tr>
                                            <td>{{$contacto->id}}</td>
                                              <td>{{$contacto->fullname}}</td>
                                              <td>{{$contacto->email}}</td>
                                              <td>{{$contacto->message}}</td>
                                          
                                            </tr>
                                            @endforeach
                                        
                                    </tbody>
                                </table>
                                
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
                        <div class="col-lg-7">
                            <div class="contact-wrapper">
                                <h3 class="title font-weight-normal mt-0 text-left">Send Us a Message</h3>
                                <form data-aos="fade-left" data-aos-duration="1200" method="POST" action="{{route('contact.store')}}">
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
                        <div class="col-lg-5">
                            <div class="detail-wrapper p-5 bg-primary">
                                <h3 class="font-weight-normal mb-3 text-light">
                                    Freshcery Headquarter
                                </h3>

                                <p class="text-light">
                                    Jl. Petani No. 159, Cibabat<br>
                                    Cimahi Utara<br>
                                    Kota Cimahi<br>
                                    Jawa Barat 40513
                                </p>

                                <p class="text-light">
                                    <i class="fas fa-phone"></i> 0898986362<br>
                                    <i class="fas fa-envelope"></i> hello@freshcery.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.97915747782!2d107.58270291427688!3d-6.893096195019089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e67b57d420db%3A0x4dd071fcb9157e80!2sBTC+Fashion+Mall!5e0!3m2!1sen!2sid!4v1522964715022" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
        </section>
    </div>


@endsection