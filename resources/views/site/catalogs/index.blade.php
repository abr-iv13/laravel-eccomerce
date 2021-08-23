@extends('site.layouts.app')
@section('main')
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <!-- Start Leftside - Sidebar -->
            <div class="col-lg-3">
                @include('site.layouts.sidebar.sidebar')
            </div> <!-- End Left Sidebar -->

            <!-- Start Rightside - Content -->
            <div class="col-lg-9">
                <!-- ::::::  Start banner Section  ::::::  -->
                <div class="banner">
                    <div class="row">
                        <div class="col-12">
                            <div class="banner__box">
                                <a href="single-1.html" class="banner__link">
                                    <img src="assets/img/banner/banner-shop-1-img-1.jpg" alt="" class="banner__img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- ::::::  End banner Section  ::::::  -->

                <!-- ::::::  Start Sort Box Section  ::::::  -->
                <div class="sort-box m-tb-30">
                    <!-- Start Sort Left Side -->
                    <div class="sort-box__left">
                        <div class="sort-box__tab">
                            <ul class="sort-box__tab-list nav">
                                <li><a class="sort-nav-link active" data-toggle="tab" href="#sort-grid"><i
                                            class="icon-grid"></i> </a></li>
                                <li><a class="sort-nav-link" data-toggle="tab" href="#sort-list"><i
                                            class="icon-list"></i></a></li>
                            </ul>
                        </div>
                        <span>There Are 13 Products.</span>
                    </div> <!-- Start Sort Left Side -->

                    <div class="sort-box__right">
                        <span>Sort By:</span>
                        <div class="sort-box__option">
                            <label class="select-sort__arrow">
                                <select name="select-sort" class="select-sort">
                                    <option value="1">Relevance</option>
                                    <option value="2">Name, A to Z</option>
                                    <option value="3"> Name, Z to A </option>
                                    <option value="4"> Price, low to high</option>
                                    <option value="5">Price, high to low</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div> <!-- ::::::  Start Sort Box Section  ::::::  -->

                <div class="product-tab-area">
                    <div class="tab-content ">
                        <div class="tab-pane show active clearfix" id="sort-grid">
                            <!-- Start Single Default Product -->
                            @include('site.layouts.products.product-grid')

                            @include('site.layouts.products.product-grid')

                            @include('site.layouts.products.product-grid')

                            @include('site.layouts.products.product-grid')

                            @include('site.layouts.products.product-grid')

                            @include('site.layouts.products.product-grid')

                            @include('site.layouts.products.product-grid')

                            @include('site.layouts.products.product-grid')
                            <!-- End  Single Default Product -->
                        </div>

                        <div class="tab-pane shop-list" id="sort-list">
                            <!-- Start Single List Product -->
                            @include('site.layouts.products.product-list')

                            @include('site.layouts.products.product-list')

                            @include('site.layouts.products.product-list')

                            @include('site.layouts.products.product-list')

                            @include('site.layouts.products.product-list')

                            @include('site.layouts.products.product-list')
                            
                            @include('site.layouts.products.product-list')
                            
                            @include('site.layouts.products.product-list')
                            <!-- End Single List Product -->

                        </div>
                    </div>
                </div>

                <div class="page-pagination">
                    <span>Showing 1-12 of 13 item(s)</span>
                    <ul class="page-pagination__list">
                        <li class="page-pagination__item">
                            <a class="page-pagination__link btn btn--gray" href="#"><i class="icon-chevron-left"></i>
                                Previous</a>
                        </li>
                        <li class="page-pagination__item"><a class="page-pagination__link active btn btn--gray"
                                href="#">1</a></li>
                        <li class="page-pagination__item"><a class="page-pagination__link btn btn--gray" href="#">2</a></li>
                        <li class="page-pagination__item">
                            <a class="page-pagination__link btn btn--gray" href="#">Next<i
                                    class="icon-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div> <!-- Start Rightside - Content -->

        </div>
    </div>
@endsection
