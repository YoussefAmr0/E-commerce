@extends('layout.Admin')
@section('section')
    <!-- HERO SECTION-->
    <div class="container">
        <section class="hero pb-3 bg-cover bg-center d-flex align-items-center" style="background: url(images/image.png)">
            <div class="container py-5">
                <div class="row px-4 px-lg-5">
                    <div class="col-lg-6">
                        <p class="text-muted small text-uppercase mb-2">New Inspiration 2020</p>
                        <h1 class="h2 text-uppercase mb-3">20% off on new season</h1><a class="btn btn-dark"
                            href="/sales">Browse collections</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- CATEGORIES SECTION-->
        <section class="pt-5">
            <header class="text-center">
                <p class="small text-muted small text-uppercase mb-1">Carefully created collections</p>
                <h2 class="h5 text-uppercase mb-4">Browse our categories</h2>
            </header>
            <div class="row">
                <div class="col-md-4"><a class="category-item" href="/men"><img class="img-fluid"
                            src="images/cat-img-1.jpg" alt="" /><strong class="category-item-title">Men clothes</strong></a>
                </div>
                <div class="col-md-4"><a class="category-item mb-4" href="/footwear"><img class="img-fluid"
                            src="images/cat-img-2.jpg" alt="" /><strong class="category-item-title">footwear</strong></a>
                    <a class="category-item" href="/accessories"><img class="img-fluid" src="images/cat-img-3.jpg"
                            alt="" /><strong class="category-item-title">accessories</strong></a>
                </div>
                <div class="col-md-4"><a class="category-item" href="/blog"><img class="img-fluid"
                            src="images/cat-img-4.jpg" alt="" /><strong class="category-item-title">blogs</strong></a>
                </div>
            </div>
        </section>
        <!-- SERVICES-->
        <section class="py-5 bg-light">
            <div class="container">
                <div class="row text-center gy-3">
                    <div class="col-lg-4">
                        <div class="d-inline-block">
                            <div class="d-flex align-items-end">
                                <svg class="svg-icon svg-icon-big svg-icon-light">
                                    <use xlink:href="#delivery-time-1"> </use>
                                </svg>
                                <div class="text-start ms-3">
                                    <h6 class="text-uppercase mb-1">Free shipping</h6>
                                    <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-inline-block">
                            <div class="d-flex align-items-end">
                                <svg class="svg-icon svg-icon-big svg-icon-light">
                                    <use xlink:href="#helpline-24h-1"> </use>
                                </svg>
                                <div class="text-start ms-3">
                                    <h6 class="text-uppercase mb-1">24 x 7 service</h6>
                                    <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-inline-block">
                            <div class="d-flex align-items-end">
                                <svg class="svg-icon svg-icon-big svg-icon-light">
                                    <use xlink:href="#label-tag-1"> </use>
                                </svg>
                                <div class="text-start ms-3">
                                    <h6 class="text-uppercase mb-1">Festivaloffers</h6>
                                    <p class="text-sm mb-0 text-muted">Free shipping worldwide</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
