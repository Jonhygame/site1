@extends('layouts.main')
@section('content')
<div id="page-content" class="page-content">
    <div class="banner">
        <div class="jumbotron jumbotron-bg text-center rounded-0" style="background-image: url('assets/img/bg-header.jpg');">
            <div class="container">
                <h1 class="pt-5">
                    Titulo
                </h1>
                <p class="lead">
                    Datos
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
                            <h3 class="title font-weight-normal mt-0 text-left">User Datatable</h3>
                            <table id="tabladeusuarios">
                                <thead>
                               <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Terms</th>
                               </tr>
                                </thead>
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
                    <div class="col-lg-12">
                        <div class="contact-wrapper">
                            <h3 class="title font-weight-normal mt-0 text-left">Products Datatable</h3>
                            <table id="tabladeproductos" >
                                <thead>
                               <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Color</th>
                                <th scope="col">Size</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Image</th>
                                <th scope="col">Category</th>
                            </tr> 
                        </thead> 
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection